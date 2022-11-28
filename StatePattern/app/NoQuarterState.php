<?php
namespace App;

class NoQuarterState implements State{
    public $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter()
    {
        echo "You Inserted a Quater";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You hasn't inserted a Quarter";
    }

    public function turnCrank()
    {
        echo "You Turned but there isn't no Quarter";
    }

    public function dispense()
    {
        echo "You Need to Pay First";
    }
}