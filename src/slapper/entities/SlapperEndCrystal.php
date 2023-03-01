<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperEndCrystal extends SlapperEntity {
    const TYPE_ID = EntityIds::ENDER_CRYSTAL;
    const HEIGHT = 1.8;
}
