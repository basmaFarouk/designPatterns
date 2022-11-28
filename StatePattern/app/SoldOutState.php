<?php
namespace App;

class SoldOutState implements State{
    public $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter()
    {
        echo "You can't insert a Quarter, The Machine is SoldOut";
    }

    public function ejectQuarter()
    {
        echo "You can't Eject, You haven't insert a Quarter yet";
    }

    public function turnCrank()
    {
        echo "You turned but there are no Gumballs";
    }

    public function dispense()
    {
        echo "No Gumballs Dispensed";
    }
}