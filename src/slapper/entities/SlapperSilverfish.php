<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSilverfish extends SlapperEntity {
    const TYPE_ID = EntityIds::SILVERFISH;
    const HEIGHT = 0.3;
}
