<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSheep extends SlapperEntity {
    const TYPE_ID = EntityIds::SHEEP;
    const HEIGHT = 1.3;
}
