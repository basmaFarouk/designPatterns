<?php
namespace App;

class WinnerState implements State{
    public $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine=$gumballMachine;
    }
    public function insertQuarter()
    {
        echo "Please Wait We have already giving you a Gumball";
    }

    public function ejectQuarter()
    {
        echo "Sorry you already turned the Crank";
    }

    public function turnCrank()
    {
        echo "Turning Twice doesn't get you another Gumball";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if($this->gumballMachine->getCount()== 0){
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }else{
            $this->gumballMachine->releaseBall();
            echo("You are a Winner");
            if($this->gumballMachine->getCount() > 0){
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            }else{
                echo "Oops, Out of gumballs";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
}