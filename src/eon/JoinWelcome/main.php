<?php

namespace eon;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use picketmine\Player;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat as C;

class JoinWelcome extends PluginBase implements Listener {
