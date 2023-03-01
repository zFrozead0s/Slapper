<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSkeletonHorse extends SlapperEntity {
    const TYPE_ID = EntityIds::SKELETON_HORSE;
    const HEIGHT = 1.6;
}
