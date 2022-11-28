<?php

abstract class Character{

    public WeoponBehaviour $weapon;
    public $playerName;
    public function __construct($name)
    {
        $this->weapon=new knifeBehaviour();
        $this->playerName=$name;
    }

    public function perform(){
        echo ("Hi I'm ".$this->playerName);
        echo ($this->weapon->useWeapon());
    }
}