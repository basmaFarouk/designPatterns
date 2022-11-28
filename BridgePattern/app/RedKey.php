<?php

namespace App;
class RedKey extends Key{
    public function getBehaviour()
    {
        echo "10% since i'm red key";
    }
}