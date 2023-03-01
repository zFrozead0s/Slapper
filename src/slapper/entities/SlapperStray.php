<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperStray extends SlapperEntity {
    const TYPE_ID = EntityIds::STRAY;
    const HEIGHT = 1.99;
}
