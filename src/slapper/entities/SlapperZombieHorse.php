<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperZombieHorse extends SlapperEntity {
    const TYPE_ID = EntityIds::ZOMBIE_HORSE;
    const HEIGHT = 1.6;
}
