<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperCow extends SlapperEntity {
    const TYPE_ID = EntityIds::COW;
    const HEIGHT = 1.4;
}
