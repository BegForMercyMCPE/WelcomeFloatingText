<?php
	
namespace BegForMercy;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\level\particle\Particle;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\level\Position\getLevel;
use pocketmine\plugin\PluginManager;
use pocketmine\plugin\Plugin;
use pocketmine\math\Vector3;
use pocketmine\utils\config;
			
class Main extends PluginBase implements Listener{
    
    public function onEnable(){
	$this->saveDefaultConfig();
    	$this->getServer()->getPluginManager()->registerEvents($this ,$this);
        $this->getLogger()->info(TF::GREEN ."Plugin by BegforMercy Enabled!");
    }
    
    public function onDisable(){
    	$this->getLogger()->info(TF::RED ."Awww It got Disabled");
    }	
					
			public function onJoin(PlayerJoinEvent $event){
       $player = $event->getPlayer();
       $level = $player->getLevel();
       $cfg = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
           $x1 = $cfg->get("Xs");
           $y1 = $cfg->get("Ys");
           $z1 = $cfg->get("Zs");
	   $x2 = $cfg->get("Xt");
           $y2 = $cfg->get("Yt");
           $z2 = $cfg->get("Zt");
                $line1 = $cfg->get("LINE1");  
                $line2 = $cfg->get("LINE2"); 
                $line3 = $cfg->get("LINE3"); 
                $line4 = $cfg->get("LINE4"); 
		$line5 = $cfg->get("LINE5"); 
		$line6 = $cfg->get("LINE6"); 
		$line7 = $cfg->get("LINE7"); 
				
		$line8 = $cfg->get("LINE8");  
                $line9 = $cfg->get("LINE9"); 
                $line10 = $cfg->get("LINE10");
                $line11 = $cfg->get("LINE11"); 
		$line12 = $cfg->get("LINE12"); 
		$line13 = $cfg->get("LINE13"); 
		$line14 = $cfg->get("LINE14"); 
		$line15 = $cfg->get("LINE15");
		$line16 = $cfg->get("LINE16"); 
                   $online = count(Server::getInstance()->getOnlinePlayers()); 
                $maxonline = $this->getServer()->getMaxPlayers();
               $playername = $player->getName();                                                  
              $rs = TF::RESET. "\n";
              $allline = $line1. $rs. $line2. $rs. $line3. $rs. $line4. $rs. $line5. $rs. $line6. $rs. $line7; 
              $allline = str_replace("{ONLINE}", $online, $allline);
              $allline = str_replace("{MAXONLINE}", $maxonline, $allline);
              $allline = str_replace("{PLAYERNAME}", $playername, $allline);
              $level->addparticle(new FloatingTextParticle(new Vector3($x1, $y1, $z1), $allline));
				
	      $allline1 = $line8. $rs. $line9. $rs. $line10. $rs. $line11. $rs. $line12. $rs. $line13. $rs. $line14. $rs. $line15. $rs. $line16; 
              $allline1 = str_replace("{ONLINE}", $online, $allline1);
              $allline1 = str_replace("{MAXONLINE}", $maxonline, $allline1);
              $allline1 = str_replace("{PLAYERNAME}", $playername, $allline1);
              $level->addparticle(new FloatingTextParticle(new Vector3($x2, $y2, $z2), $allline1));
            
         }
          
}




