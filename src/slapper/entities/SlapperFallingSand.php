<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\block\Block;
use pocketmine\block\RuntimeBlockStateRegistry;
use pocketmine\block\UnknownBlock;
use pocketmine\block\VanillaBlocks;
use pocketmine\entity\object\FallingBlock;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\convert\TypeConverter;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataCollection;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataProperties;
use pocketmine\world\format\io\GlobalBlockStateHandlers;

class SlapperFallingSand extends SlapperEntity {

    const TYPE_ID = EntityIds::FALLING_BLOCK;
    const HEIGHT = 0.98;

    protected ?Block $block = null;

    public function initEntity(CompoundTag $nbt): void{
        parent::initEntity($nbt);

        $blockRegistry = RuntimeBlockStateRegistry::getInstance();
        if($nbt->getTag("TileID") !== null || $nbt->getCompoundTag("FallingBlock") !== null) {
            $this->block = FallingBlock::parseBlockNBT($blockRegistry, $nbt);
        }

        if($this->block === null || $this->block instanceof UnknownBlock) {
            $this->block = VanillaBlocks::SAND();
        }
    }

    protected function syncNetworkData(EntityMetadataCollection $properties) : void{
        parent::syncNetworkData($properties);
        /** @phpstan-ignore-next-line */
        $properties->setInt(EntityMetadataProperties::VARIANT, TypeConverter::getInstance()->getBlockTranslator()->internalIdToNetworkId($this->block->getStateId()));
    }

    public function saveNBT(): CompoundTag {
        $nbt = parent::saveNBT();
        /** @phpstan-ignore-next-line */
        $nbt->setTag("FallingBlock", GlobalBlockStateHandlers::getSerializer()->serialize($this->block->getStateId())->toNbt());

        return $nbt;
    }

    public function setBlock(Block $block): void{
        $this->block = $block;
        $this->networkPropertiesDirty = true;
    }
}
