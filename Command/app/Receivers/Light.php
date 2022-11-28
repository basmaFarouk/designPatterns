<?php
namespace App\Receivers;

class Light{
    
    public string $place;

    public function __construct($place)
    {
        $this->place=$place;
    }

    public function ON(){
        echo "Light in ".$this->place." ON "; 
    }

    public function OFF(){
        
        echo "Light in ".$this->place." OFF "; 
    }
}