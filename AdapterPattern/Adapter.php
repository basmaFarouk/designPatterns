<?php

class Adapter{

    public $enemies=[];


    public function loop(){

        array_push($this->enemies,new EnemyTank());
        array_push($this->enemies,new EnemyPlane());
        array_push($this->enemies,new SardeenaAdapter(new Sardeena()));
        foreach ($this->enemies as $enemy){
                
        }
    }
}