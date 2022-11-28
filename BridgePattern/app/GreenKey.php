<?php
namespace App;
class GreenKey extends Key{
    public function getBehaviour()
    {
        echo "20% since i'm green key";
    }
}