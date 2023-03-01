<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperEnderman extends SlapperEntity {
    const TYPE_ID = EntityIds::ENDERMAN;
    const HEIGHT = 2.9;
}
