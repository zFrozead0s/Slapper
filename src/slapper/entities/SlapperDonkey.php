<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperDonkey extends SlapperEntity {
    const TYPE_ID = EntityIds::DONKEY;
    const HEIGHT = 1.6;
}
