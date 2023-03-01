<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperGuardian extends SlapperEntity {
    const TYPE_ID = EntityIds::GUARDIAN;
    const HEIGHT = 0.85;
}
