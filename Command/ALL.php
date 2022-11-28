<?php

use App\Commands\LightOffCommand;
use App\Commands\LightOnCommand;
use App\Commands\MacroCommand;
use App\Commands\SpeedDownCommand;
use App\Commands\SpeedUpCommand;
use App\Receivers\Fan;
use App\Receivers\Light;
use App\Remote;

require __DIR__.'./vendor/autoload.php';

$fan= new Fan('alaoda');
$light = new Light('alsala');
$lightON= new LightOnCommand($light);
$lightOff=new LightOffCommand($light);
$fanUp= new SpeedUpCommand($fan);
// $fanUp2= new GlobalSpeedUpCommand($fan);
// $fanUp3= new GlobalSpeedUpCommand($fan);
$fanDown=new SpeedDownCommand($fan);

$remote=new Remote();
$remote->setCommand(0,$lightON,$lightOff);
$remote->setCommand(1,$fanUp,$fanDown);
$remote->onButtonPressed(0);
$remote->onButtonPressed(1);
$remote->unDoButtonPushed();
$remote->unDoButtonPushed();
return
$partyOn=[$lightON,$fanUp];
$partyOff=[$lightOff,$fanDown];
$PartyOnMacro=new MacroCommand($partyOn);
$PartyOffMacro=new MacroCommand($partyOff);
$remote->setCommand(2,$PartyOnMacro,$PartyOffMacro);
$remote->onButtonPressed(2);
// $remote->offButtonPressed(0);
$remote->onButtonPressed(1);
$remote->unDoButtonPushed();
$remote->onButtonPressed(1);
$remote->onButtonPressed(1);
// $remote->offButtonPressed(1);
// $remote->offButtonPressed(1);
// $remote->offButtonPressed(1);
// $remote->offButtonPressed(5);