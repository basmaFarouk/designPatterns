<?php

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