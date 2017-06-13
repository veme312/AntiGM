<?php
  namespace Main;
  
  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\Player;
  use pocketmine\Server;
  use pocketmine\event\entity\EntityDamageEvent;
  use pocketmine\event\entity\EntityDamageByEntityEvent;
  use pocketmine\event\entity\EntityExplodeEvent;
  
    class Main extends PluginBase implements Listener{
        public function onEnable(){
<<<<<<< HEAD
             $this->getLogger()->info("Плагин успешно загружен!");
=======
             $this->getLogger()->info("§l§fПлагин успешно загружен!");
>>>>>>> origin/master
             $this->getServer()->getPluginManager()->registerEvents($this, $this);
          }
        public function antiBoom(EntityExplodeEvent $e){
              $e->setCancelled(true);
        }
        
        public function antiDmg(EntityDamageEvent $e){
             $en = $e->getEntity();
             $dmg = $e->getDamager();
               if($dmg instanceof Player && $en instanceof Player){
<<<<<<< HEAD
              	if($dmg->hasPermission("antigm")){
                     if($dmg->getGameMode() == 1){
                        $e->setCancelled(true);
                    }elseif(
                       $dmg->isFlying() != null){
                    }
               }
         }
        }
      
=======
                if($dmg->getGameMode() == 1){
                   $e->setCancelled(true);
                   }elseif(
                   $dmg->isFlying() != null){
            }
          }
      }
>>>>>>> origin/master
}
