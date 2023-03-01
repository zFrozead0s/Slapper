<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperChicken extends SlapperEntity {
    const TYPE_ID = EntityIds::CHICKEN;
    const HEIGHT = 0.7;
}
