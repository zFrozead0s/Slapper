<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperWolf extends SlapperEntity {
    const TYPE_ID = EntityIds::WOLF;
    const HEIGHT = 0.85;
}
