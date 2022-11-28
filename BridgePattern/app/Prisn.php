<?php
namespace App;
class Prisn extends Shape{
    public function getDescription()
    {
        echo "Hey I'm Prisn I increase Speed By ".$this->key->getBehaviour();
    }
}