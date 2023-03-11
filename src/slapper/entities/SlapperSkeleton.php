<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSkeleton extends SlapperEntity {
    const TYPE_ID = EntityIds::SKELETON;
    const HEIGHT = 1.99;
}
