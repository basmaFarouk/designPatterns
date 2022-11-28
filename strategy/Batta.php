<?php


abstract class Batta {

    private int $id;
    private string $name;
    private static int $counter =0;
    protected FlyBehaviour $myFlyBehaviour;

    public function __construct()
    {
        $this->id=++self::$counter;
        $this->name="Batta&".$this->id;
        $this->myFlyBehaviour=new FlyWithWings();

    }

    public function swim(){
        return "Hey I'm Swimming";
    }

    public abstract function display();

    public function perform(){
        echo("Hi I'm ".$this->name);
        echo($this->swim());
        echo($this->display());
        echo($this->myFlyBehaviour->fly());

    }
}