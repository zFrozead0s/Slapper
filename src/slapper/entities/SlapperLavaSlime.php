<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperLavaSlime extends SlapperEntity {
    const TYPE_ID = EntityIds::MAGMA_CUBE;
    const HEIGHT = 0.51;
}
