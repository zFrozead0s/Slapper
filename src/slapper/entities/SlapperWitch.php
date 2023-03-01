<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperWitch extends SlapperEntity {
    const TYPE_ID = EntityIds::WITCH;
    const HEIGHT = 1.95;
}
