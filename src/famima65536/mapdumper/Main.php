<?php

namespace famima65536\mapdumper;

use famima65536\mapdumper\command\MapDumpCommand;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    protected function onEnable(): void{
        $this->getServer()->getCommandMap()->registerAll("3DMapDumper", [
            new MapDumpCommand($this->getDataFolder())
        ]);
    }

}