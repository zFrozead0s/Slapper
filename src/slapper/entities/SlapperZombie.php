<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperZombie extends SlapperEntity {
    const TYPE_ID = EntityIds::ZOMBIE;
    const HEIGHT = 1.95;
}