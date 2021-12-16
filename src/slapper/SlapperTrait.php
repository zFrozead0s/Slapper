<?php

declare(strict_types=1);

namespace slapper;

use pocketmine\player\Player;

/**
 * Trait containing methods used in various Slappers.
 */
trait SlapperTrait {

	protected bool $networkPropertiesDirty = false;

    /**
     * @return string
     */
    abstract public function getNameTag(): string;

    public function tryChangeMovement(): void {
		//NOOP
    }

	public function prepareMetadata(): void {
        $this->networkPropertiesDirty = true;
    }

    public function sendData(?array $playerList, ?array $data = null): void {
		//NOOP
    }

    public function getDisplayName(Player $player): string {
        $vars = [
            "{name}" => $player->getName(),
            "{display_name}" => $player->getDisplayName(),
            "{nametag}" => $player->getNameTag()
        ];
        return str_replace(array_keys($vars), array_values($vars), $this->getNameTag());
    }
}
