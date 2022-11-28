<?php

namespace App;
class Cube extends Shape{
    public function getDescription()
    {
        echo "Hey I'm Cube I increase Power By ".$this->key->getBehaviour();
    }
}