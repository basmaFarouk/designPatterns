<?php
namespace App;
abstract class Beverage{

   final public function prepare(){ //Template Method

        $this->boilWater();
        $this->addComponent();
        $this->addWaterToCup();
        if($this->wantedEdafaat()){

            $this->addEdafaat();
        }
    }

    public function boilWater(){
        echo("Boiling Water");
    }

    public function addWaterToCup():void{
        echo("Adding Boiled Water To Cup");
    }

    public abstract function addComponent();
    public abstract function addEdafaat();

    protected function wantedEdafaat():bool{ //hook
        return true;
    }
}