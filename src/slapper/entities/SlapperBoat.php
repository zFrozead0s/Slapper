<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperBoat extends SlapperEntity {
    const TYPE_ID = EntityIds::BOAT;
    const HEIGHT = 0.6;
}
