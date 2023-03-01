<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperEndermite extends SlapperEntity {
    const TYPE_ID = EntityIds::ENDERMITE;
    const HEIGHT = 0.3;
}
