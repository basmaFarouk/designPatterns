<?php
namespace App;

class GumballMachine{
    public State $soldOutState;
    public State $noQuarterState;
    public State $hasQuarterState;
    public State $soldState;
    public State $winnerState;
    public $state;
    public $count=0;

    public function __construct($numberGumballs)
    {
        $this->soldOutState=new SoldOutState($this);
        $this->noQuarterState=new NoQuarterState($this);
        $this->hasQuarterState=new HasQuarterState($this);
        $this->soldState=new SoldState($this);
        $this->winnerState=new WinnerState($this);
        $this->count=$numberGumballs;
        if($numberGumballs > 0){
            $this->state=$this->noQuarterState;
        }else{
            $this->state=$this->soldOutState;
        }
    }

    public function insertQuarter(){
        $this->state->insertQuarter();
    }

    public function ejectQuarter(){
        $this->state->ejectQuarter();
    }

    public function turnCrank(){
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState($state){
        $this->state=$state;
    }

    public function releaseBall(){
        echo("a Gumball comes rolling out the slot");
        if($this->count > 0){
            $this->count-=1;
        }
    }

    public function getCount(){
        return $this->count;
    }

    public function getNoQuarterState(){
        return $this->noQuarterState;
    }

    public function getSoldOutState(){
        return $this->soldOutState;
    }

    public function getSoldState(){
        return $this->soldState;
    }

    public function getHasQuarterState(){
        return $this->hasQuarterState;
    }

    public function getWinnerState(){
        return $this->winnerState;
    }

    public function refill(){
        $this->count=9;
    }
}