<?php



class le3ba extends Batta{

    public function __construct()
    {
        parent::__construct();
        $this->myFlyBehaviour=new FlyNoFly();
    }
        
    
    public function display()
    {
        return "I'm Le3ba";
    }
}