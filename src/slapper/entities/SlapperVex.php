<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperVex extends SlapperEntity {
    const TYPE_ID = EntityIds::VEX;
    const HEIGHT = 0.8;
}
