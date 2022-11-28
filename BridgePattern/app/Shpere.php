<?php
namespace App;
class Sphere extends Shape{
    public function getDescription()
    {
        echo "Hey I'm Shpere I increase Health By ".$this->key->getBehaviour();
    }
}