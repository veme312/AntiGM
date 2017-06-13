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
             $this->getLogger()->info("Плагин успешно загружен!");
             $this->getServer()->getPluginManager()->registerEvents($this, $this);
          }
        public function antiBoom(EntityExplodeEvent $e){
              $e->setCancelled(true);
        }
        
        public function antiDmg(EntityDamageEvent $e){
             $en = $e->getEntity();
             $dmg = $e->getDamager();
               if($dmg instanceof Player && $en instanceof Player){
              	if($dmg->hasPermission("antigm")){
                     if($dmg->getGameMode() == 1){
                        $e->setCancelled(true);
                    }elseif(
                       $dmg->isFlying() != null){
                    }
               }
         }
        }
      
}
