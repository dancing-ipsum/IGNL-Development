<?php

namespace FastAuth;

use pocketmine\player as player;
use pocketmine\event\PlayerMoveEvent as moveevent;
use SimpleAuth\PlayerAuthenticateEvent as AuthEvent;
use SimpleAuth\PlayerRegisterEvent as Register;
use SimpleAuth\Player!oginEvent as Login;

class FastAuth extends PluginBase{

  public function onEnable($enable, $sender, $this){
  $this->getLogger("[FastAuth] FastAuth has been enabled!")
  

>
