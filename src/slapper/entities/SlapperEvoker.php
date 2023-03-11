<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperEvoker extends SlapperEntity {
    const TYPE_ID = EntityIds::EVOCATION_ILLAGER;
    const HEIGHT = 1.95;
}
