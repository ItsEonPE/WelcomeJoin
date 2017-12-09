<?php

namespace eon;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use picketmine\Player;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat as C;

class JoinMessage extends PluginBase implements Listener {

public $prefix = C::GRAY."[".C::GOLD."JoinWelcome".C::GRAY."]";
         //[JoinWelcome]

public function onEnable(){

          $this->getServer()->getPluginManager()->registerEvents($this, $this);
          $this->getlogger()->Info($this->prefix . C::RED . "Is Active");
         
          }

public function onDisable(){

          $this->getLogger()->Info($this->prefix . C::BLUE . " Is Disabled");
          
          }

public function onJoin(PlayerJoinEvent $event){

            $player = $event->getPlayer();
            
            if ($player->isOp()){
                      $event->setJoinMessage(C::GRAY . "[". C::DARK_RED . "-" . C::GRAY . "]" .C::DARK_GRAY . C::BOLD . " » " .C::RESET . C::GREEN . $player->getName() . C::GRAY ." joined the game");
                            } else {
                              $event->setJoinMessage(C::GRAY . "[". C::DARK_RED . "-" . C::GRAY . "]" .C::DARK_GRAY . C::BOLD . " » " .C::RESET . C::GREEN . $player->getName() . C::GRAY ." joined the game");
                              }
                            }
                             
public function onQuit(PlayerQuitEvent $event){

              $player = $event->getPlayer();
              
              if ($player->isOp()){
                     $event->setQuitMessage(C::GRAY . "[". C::DARK_RED . "-" . C::GRAY . "]" .C::DARK_GRAY . C::BOLD . " » " .C::RESET . C::GREEN . $player->getName() . C::GRAY ." has left the game");
                       }else{
                           $event->setQuitMessage(C::GRAY . "[". C::DARK_RED . "-" . C::GRAY . "]" .C::DARK_GRAY . C::BOLD . " » " .C::RESET . C::GREEN . $player->getName() . C::GRAY ." has left the game");
                           }
                         }

}  
