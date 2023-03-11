<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSlime extends SlapperEntity {
    const TYPE_ID = EntityIds::SLIME;
    const HEIGHT = 0.51;
}
