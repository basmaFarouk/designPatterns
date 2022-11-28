<?php

class animal{

    public function bark(){
        echo "I can bark"."<br>";
    }
}

class cat{
    public function meow(){
        echo "i can meow";
    }
}


class dog{
    public function __construct(animal $animal, cat $cat)
    {
         $animal->bark();
        return $cat->meow();
    }
}
$animal = new animal();
$cat=new cat();
$dog= new dog($animal,$cat);