<?php
namespace App;

class HasQuarterState implements State{
    public $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter()
    {
        echo "You can't Insert another Quarter";
    }

    public function ejectQuarter()
    {
        echo "Quarter Returned";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You Turned";
        $winner=rand(0,10);
        if($winner == 0 && $this->gumballMachine->getCount() > 1){
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        }else{
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo "No Gumball Dispensed";
    }
}