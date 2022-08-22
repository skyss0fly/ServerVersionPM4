<?php

declare(strict_types=1);

namespace skyss0fly\ServerVersionPM4;

use pocketmine\plugin\PluginBase;
use pocketmine\VersionInfo;

class main extends PluginBase{
  public function __toString() : string{
		return $this->getFullVersion();
   function onLoad(): void {
		
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::MINECOIN_GOLD . "ServerVersionPM4 Has Successfully loaded!");
		}
	}
	
	 function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::LIGHT_PURPLE . "Your server version is $this->getFullVersion()");
		}
	}
	
	 function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::DARK_AQUA . "Goodbye hope you had fun!!");
		}
}
  }
