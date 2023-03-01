<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperMule extends SlapperEntity {
    const TYPE_ID = EntityIds::MULE;
    const HEIGHT = 1.6;
}
