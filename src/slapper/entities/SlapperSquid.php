<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperSquid extends SlapperEntity {
    const TYPE_ID = EntityIds::SQUID;
    const HEIGHT = 0.8;
}
