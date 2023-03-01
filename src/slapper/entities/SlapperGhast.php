<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperGhast extends SlapperEntity {
    const TYPE_ID = EntityIds::GHAST;
    const HEIGHT = 4;
}
