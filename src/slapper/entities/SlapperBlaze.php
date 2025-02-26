<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperBlaze extends SlapperEntity {
    const TYPE_ID = EntityIds::BLAZE;
    const HEIGHT = 1.8;
}
