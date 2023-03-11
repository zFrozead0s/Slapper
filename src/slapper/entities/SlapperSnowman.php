<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSnowman extends SlapperEntity {
    const TYPE_ID = EntityIds::SNOW_GOLEM;
    const HEIGHT = 1.9;
}
