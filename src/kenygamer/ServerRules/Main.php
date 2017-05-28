<?php

/*
 * ServerRules plugin for PocketMine-MP
 * Copyright (C) 2017 Kevin Andrews <https://github.com/kenygamer/ServerRules>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
*/

namespace kenygamer\ServerRules;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("§aEnabling " . $this->getDescription()->getFullName() . "...");
		$this->saveDefaultConfig();
	}
	
	 public function onDisable(){
                $this->getLogger()->info("§cDisabling " . $this->getDescription()->getFullName() . "...");
	 }
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "rules":
                if (!($sender instanceof Player)){
                    $sender->sendMessage("§e--------§4[ServerRules]§e-------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule8"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("command.rules")){
                    $sender->sendMessage("§e--------§4[ServerRules]§e--------");
                    $sender->sendMessage("- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule8"));
                    return true;
                }
                break;
            }
        }
    }
?>
