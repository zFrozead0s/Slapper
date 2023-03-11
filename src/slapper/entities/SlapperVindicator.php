<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperVindicator extends SlapperEntity {
    const TYPE_ID = EntityIds::VINDICATOR;
    const HEIGHT = 1.95;
}
