<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperWither extends SlapperEntity {
    const TYPE_ID = EntityIds::WITHER;
    const HEIGHT = 3.5;
}
