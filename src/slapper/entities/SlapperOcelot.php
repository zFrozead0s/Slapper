<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperOcelot extends SlapperEntity {
    const TYPE_ID = EntityIds::OCELOT;
    const HEIGHT = 0.7;
}
