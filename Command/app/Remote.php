<?php
namespace App;

use App\Commands\Command;
use App\Commands\NoCommand;
use SplFixedArray;

class Remote{

    public  $onCommands;
    public  $offCommands;
    public $command;
    public Command $undoCommand;
    public Stack $stack;

    public function __construct()
    {
        $this->onCommands=new SplFixedArray(7);
        $this->offCommands=new SplFixedArray(7);
        $this->command=new NoCommand();
        $this->undoCommand=$this->command;
        $this->stack=new Stack();

        for($i=0; $i<7; $i++){
            $this->onCommands[$i]=$this->command;
            $this->offCommands[$i]=$this->command;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand){
        $this->onCommands[$slot]=$onCommand;
        $this->offCommands[$slot]=$offCommand;
    }

    public function onButtonPressed(int $slot){
        $this->onCommands[$slot]->execute();
        echo "<br>";
        $this->stack->push($this->onCommands[$slot]);
        // $this->undoCommand=$this->onCommands[$slot];
        echo "<br>";
    }
    

    public function offButtonPressed(int $slot){
        $this->offCommands[$slot]->execute();
        echo "<br>";
        $this->stack->push($this->onCommands[$slot]);
        // $this->undoCommand=$this->offCommands[$slot];
        echo "<br>";
    }

    public function unDoButtonPushed(){
        $this->stack->top()->unexecute();
        $this->stack->pop();
        // $this->undoCommand->unexecute();
    }

}