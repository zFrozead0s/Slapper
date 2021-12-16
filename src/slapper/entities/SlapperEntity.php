<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\data\bedrock\LegacyEntityIdToStringIdMap;
use pocketmine\entity\Entity;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\entity\Location;
use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\network\mcpe\protocol\types\entity\MetadataProperty;
use pocketmine\player\Player;
use pocketmine\world\particle\FloatingTextParticle;
use slapper\SlapperTrait;

class SlapperEntity extends Entity {
    use SlapperTrait;

	public static function getNetworkTypeId(): string{
		//We are using EntityLegacyIds for BC (#blamejojoe)
		return LegacyEntityIdToStringIdMap::getInstance()->legacyToString(static::TYPE_ID) ?? throw new \InvalidStateException(static::class . ' has invalid Entity ID');
	}

    const TYPE_ID = 0;
    const HEIGHT = 0;

	/** @var float */
	public $width = 1; //BC and polyfill

	private CompoundTag $namedTagHack;

    private FloatingTextParticle $particle;

	/**
	 * @var true[]
	 * @phpstan-var array<string, true>
	 */
	protected array $commands = [];

    public function __construct(Location $location, ?CompoundTag $nbt = null) {
        $this->particle = new FloatingTextParticle('');
        parent::__construct($location, $nbt);
    }

	public function initEntity(CompoundTag $nbt): void {
		parent::initEntity($nbt);
		$this->namedTagHack = $nbt;
		if(($commandsTag = $nbt->getTag('Commands')) instanceof ListTag or $commandsTag instanceof CompoundTag){
			/** @var StringTag $stringTag */
			foreach($commandsTag as $stringTag){
				$this->commands[$stringTag->getValue()] = true;
			}
		}
		$this->setImmobile(true);
		$this->setNameTagVisible(false);
	}

	//For backwards-compatibility
	public function saveNBT(): CompoundTag{
		$nbt = parent::saveNBT();
		$nbt = $nbt->merge($this->namedTagHack);
		$commandsTag = new ListTag([], NBT::TAG_String);
		$nbt->setTag('Commands', $commandsTag);
		foreach($this->commands as $command => $bool){
			$commandsTag->push(new StringTag($command)):
		}
		return $nbt;
	}

    protected function sendSpawnPacket(Player $player): void {
		parent::sendSpawnPacket($player);

		$this->particle->setTitle($this->getDisplayName($player));
        $this->getWorld()->addParticle($this->location->asVector3()->add(0, static::HEIGHT), $this->particle, [$player]);
    }

    public function despawnFrom(Player $player, bool $send = true): void {
        parent::despawnFrom($player, $send);
        $this->particle->setInvisible(true);
        $this->getWorld()->addParticle($this->location->asVector3()->add(0, static::HEIGHT), $this->particle, [$player]);
        $this->particle->setInvisible(false);
    }

	/**
	 * @param Player[]|null $targets
	 * @param MetadataProperty[] $data
	 */
	public function sendData(?array $targets, ?array $data = null): void{
		$targets ??= $this->hasSpawned;
		$data ??= $this->getAllNetworkData();
        parent::sendData($targets, $data);
        if(isset($data[EntityMetadataProperties::NAMETAG])){
        	$this->spawnParticleToPlayers($targets);
        }
	}

    public function broadcastMovement(bool $teleport = false): void {
        parent::broadcastMovement($teleport);
		$this->spawnParticleToPlayers($this->hasSpawned);
    }

	public function getInitialSizeInfo(): EntitySizeInfo{ return new EntitySizeInfo(static::HEIGHT, $this->width);

	/** @return string[] */
	public function getCommands(): array{
		return array_keys($this->commands);
	}

	public function addCommand(string $command): void{
		$this->commands[$command] = true;
	}

	public function hasCommand(string $command): bool{
		return isset($this->commands[$command]);
	}

	public function removeCommand(string $command): void{
		unset($this->commands[$command]);
	}

	/** @param Player[] $players */
    private function spawnParticleToPlayers(array $players): void{
		$world = $this->getWorld();
        $particlePos = $this->location->asVector3()->add(0, static::HEIGHT);
        foreach($players as $player){
        	$this->particle->setTitle($this->getDisplayName($player));
    	    $world->addParticle($particlePos, $this->particle, [$player]);
        }
    }

	//For backwards-compatibility
    public function __get(string $name): mixed{
    	if($variable === 'namedtag'){
    		return $this->namedTagHack;
    	}
    	throw new \ErrorException("Undefined property: " . get_class($this) . "::\$" . $name);
    }
    
	//For backwards-compatibility
    public function __set(string $name, mixed $value): void{
    	if($variable === 'namedtag'){
    		if(!$value instanceof CompoundTag){
    			throw new \TypeError('Typed property ' . get_class($this) . "::\$namedtag must be " . CompoundTag::class . ", " . gettype($value) . "used");
    		}
    		$this->namedTagHack = $value;
    	}
    	throw new \ErrorException("Undefined property: " . get_class($this) . "::\$" . $name);
    }

	//For backwards-compatibility
    public function __isset(string $name): bool{
    	return $name === 'namedtag';
    }
}
