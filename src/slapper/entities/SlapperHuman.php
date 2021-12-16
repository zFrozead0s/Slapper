<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\entity\Human;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\convert\SkinAdapterSingleton;
use pocketmine\network\mcpe\protocol\PlayerListPacket;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataCollection;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataProperties;
use pocketmine\network\mcpe\protocol\types\entity\MetadataProperty;
use pocketmine\network\mcpe\protocol\types\entity\StringMetadataProperty;
use pocketmine\network\mcpe\protocol\types\PlayerListEntry;
use pocketmine\player\Player;
use slapper\SlapperTrait;

class SlapperHuman extends Human {
    use SlapperTrait;

	protected string $menuName;

	public function initEntity(CompoundTag $nbt): void{
		$this->menuName = $nbt->getString('MenuName', '');
	}

    public function saveNBT(): CompoundTag {
        $nbt = parent::saveNBT();
        $nbt->setString('MenuName', $this->menuName);
        return $nbt;
    }

	public function setMenuName(string $menuName): void{
		$this->menuName = $menuName;
	}

	public function getNameName(): string{
		return $this->menuName;
	}

	/**
	 * @param Player[]|null $targets
	 * @param MetadataProperty[] $data
	 */
    public function sendData(?array $targets, ?array $data = null): void{
		$targets = $targets ?? $this->hasSpawned;
		$data = $data ?? $this->getAllNetworkData();
		if(!isset($data[EntityMetadataProperties::NAMETAG])){
			parent::sendData($targets, $data);
			return;
		}
		foreach($targets as $p){
			$data[EntityMetadataProperties::NAMETAG] = new StringMetadataProperty($this->getDisplayName($p));
			$p->getNetworkSession()->syncActorData($this, $data);
		}
    }

    protected function sendSpawnPacket(Player $player): void {
        parent::sendSpawnPacket($player);

        if ($this->menuName !== "") {
        	$player->getNetworkSession()->sendDataPacket(PlayerListPacket::add([PlayerListEntry::createAdditionEntry($this->getUniqueId(), $this->getId(), $this->menuName, SkinAdapterSingleton::get()->toSkinData($this->getSkin()), '')]));
        }
    }
}
