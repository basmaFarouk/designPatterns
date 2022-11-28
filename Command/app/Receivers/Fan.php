<?php
namespace App\Receivers;

class Fan{
    
    public int $speed;
    public string $place;

    public function __construct($place)
    {
        $this->place=$place;
        $this->speed=0;
    }

    public function speenUp(){
        $this->speed++;
        if($this->speed <=3){

            echo "Increasing Fan Speed ".$this->place." to ".$this->speed; 
        }else{

            $this->speed=0;
            echo "it is the highest speed";
        }
    }

    public function speenDown(){
        $this->speed--;
        if($this->speed >0){
            echo "Decreasing Fan Speed ".$this->place." to ".$this->speed; 
        }else{
            echo "ShutDown the Fan";
        }
    }
}