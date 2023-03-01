<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataCollection;
use pocketmine\network\mcpe\protocol\types\entity\EntityMetadataFlags;

class SlapperElderGuardian extends SlapperEntity {
    const TYPE_ID = EntityIds::ELDER_GUARDIAN;
    const HEIGHT = 1.9975;

    protected function syncNetworkData(EntityMetadataCollection $properties) : void{
        parent::syncNetworkData($properties);
        $properties->setGenericFlag(EntityMetadataFlags::ELDER, true);
    }
}
