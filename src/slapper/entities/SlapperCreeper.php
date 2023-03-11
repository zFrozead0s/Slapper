<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperCreeper extends SlapperEntity {
    const TYPE_ID = EntityIds::CREEPER;
    const HEIGHT = 1.7;
}
