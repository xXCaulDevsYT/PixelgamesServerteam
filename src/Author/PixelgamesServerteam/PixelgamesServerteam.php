<?php

namespace Author\PixelgamesServerteam;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class PixelgamesServerteam extends PluginBase {
    
    public function onLoad() {
        $this->getLogger()->info("Laden...");
    }
    
    public function onEnable() {
        $this->getLogger()->info("Aktiviert");
    }
    
    public function onDisable() {
        $this->getLogger()->info("Deaktiviert");
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if($command->getName() === "serverteam"){
            if (!isset($args[0])) {
                $sender->sendMessage("§c[PGServerteam] Benutzung: /serverteam <list|info|help>");
                return true;
            }
            if($args[0] == "list") {
                $sender->sendMessage("§e-------§1Das Serverteam§e-------");
                $sender->sendMessage("§aOwner: iStrafeNubzHDyt");
                $sender->sendMessage("§4Admin: CuzImPERCY, Schneekordel750");
                $sender->sendMessage("§dDeveloper: M4nt0s, HonorGamerHD");
                $sender->sendMessage("§6Moderator: itsDkiller, PremixMCPE");
                $sender->sendMessage("§6Chef§c-§bBuilder: EinsDummeNuss");
                $sender->sendMessage("§bBuilder: SalmonAttic4382, darksideofforc");
                $sender->sendMessage("§e----------------------------");
                return true;
                
                } elseif($args[0] == "info") {
                $sender->sendMessage("§e-------------------------------------");
                $sender->sendMessage("§ePlugin von iStrafeNubzHDyt");
                $sender->sendMessage("§bName: PixelgamesServerteam");
                $sender->sendMessage("§bVersion: 1.32#");
                $sender->sendMessage("§bFür PocketMine-API: 3.0.0-ALPHA12");
                $sender->sendMessage("§6Permissions: pgserverteam.cmd");
                $sender->sendMessage("§eSpeziell für PIXELGAMES entwickelt");
                $sender->sendMessage("§e-------------------------------------");
                return true;
                
                } elseif($args[0] == "help") {
                $sender->sendMessage("§9---§aServerteam-Plugin§9---");
                $sender->sendMessage("§a/serverteam list §b-> Zeigt das Serverteam an");
                $sender->sendMessage("§6/serverteam info §b-> Zeigt Details über das Plugin");
                $sender->sendMessage("§6/serverteam help §b-> Zeigt dieses Hilfemenü an");
                return true;
                }
            }
        }
    }