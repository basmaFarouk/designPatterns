<?php

class Amplifier{
    public string $description;
    public $tuner;
    public $DVD;
    public $CD;

    public function __construct(string $description)
    {
        $this->description=$description;
    }

    public function on():void
    {
        echo($this->description.' '.' on');
    }

    public function off():void
    {
        echo($this->description.' '.' off');
    }

}