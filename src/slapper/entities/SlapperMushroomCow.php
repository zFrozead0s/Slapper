<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperMushroomCow extends SlapperEntity {
    const TYPE_ID = EntityIds::MOOSHROOM;
    const HEIGHT = 1.4;
}
