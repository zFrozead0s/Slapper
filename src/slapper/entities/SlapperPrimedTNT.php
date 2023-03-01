<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperPrimedTNT extends SlapperEntity {
    const TYPE_ID = EntityIds::TNT;
    const HEIGHT = 0.98;
}