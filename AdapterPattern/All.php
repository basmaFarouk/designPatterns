<?php

interface IEnemy{

    public function fireCanols();
    public function refillBanzine();
}

class EnemyPlane implements IEnemy{
    public function fireCanols()
    {
        echo ('Plane Fire Cannols');
    }

    public function refillBanzine()
    {
        echo ('Plane Refill Banzine');
    }
}

class EnemyTank implements IEnemy{
    public function fireCanols()
    {
        echo ('Tank Fire Cannols');
    }

    public function refillBanzine()
    {
        echo ('Tank Refill Banzine');
    }
}

class Sardeena{ 
    //عاوزة اعمل انيمي تاني النوع ده ولكن مش هعرف اخليه يعمل ايبلمنت للانترفيس لانه مستخدم ميثود تانية
    
        public function shisha(){
            echo ("ashrab shisha");
        }
    
        public function hagaren(){
            echo ("ashrab hagaren");
        }
}

class SardeenaAdapter implements IEnemy{

    public $tempSardeena;

    public function __construct($temp)
    {
        $this->tempSardeena=$temp;
    }

    public function fireCanols()
    {
        $this->tempSardeena->shisha();
    }
    public function refillBanzine()
    {
        $this->tempSardeena->hagaren();
    }
}


 $enemies=[];

array_push($enemies,new EnemyTank());
array_push($enemies,new EnemyPlane());
array_push($enemies,new SardeenaAdapter(new Sardeena()));
foreach ($enemies as $enemy){
        $enemy->fireCanols();
        echo '<br>';
        $enemy->refillBanzine().'<br>';
        echo '<br>';
}
