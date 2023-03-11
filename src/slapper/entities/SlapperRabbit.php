<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperRabbit extends SlapperEntity {
    const TYPE_ID = EntityIds::RABBIT;
    const HEIGHT = 0.5;
}