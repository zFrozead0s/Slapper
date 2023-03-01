<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperShulker extends SlapperEntity {
    const TYPE_ID = EntityIds::SHULKER;
    const HEIGHT = 1;
}
