<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperHusk extends SlapperEntity {
    const TYPE_ID = EntityIds::HUSK;
    const HEIGHT = 1.95;
}
