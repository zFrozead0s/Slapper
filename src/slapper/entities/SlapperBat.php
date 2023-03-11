<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperBat extends SlapperEntity {
    const TYPE_ID = EntityIds::BAT;
    const HEIGHT = 0.9;
}
