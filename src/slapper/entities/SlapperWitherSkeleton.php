<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperWitherSkeleton extends SlapperEntity {
    const TYPE_ID = EntityIds::WITHER_SKELETON;
    const HEIGHT = 2;
}
