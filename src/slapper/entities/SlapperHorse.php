<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperHorse extends SlapperEntity {
    const TYPE_ID = EntityIds::HORSE;
    const HEIGHT = 1.6;
}
