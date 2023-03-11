<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperLlama extends SlapperEntity {
    const TYPE_ID = EntityIds::LLAMA;
    const HEIGHT = 1.87;
}
