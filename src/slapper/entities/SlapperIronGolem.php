<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperIronGolem extends SlapperEntity {
    const TYPE_ID = EntityIds::IRON_GOLEM;
    const HEIGHT = 2.7;
}
