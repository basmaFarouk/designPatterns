<?php

namespace App\Commands;

class MacroCommand implements Command{

    public $command ;

    public function __construct($commands)
    {
        $this->command=$commands;
    }
    public function execute()
    {
        for($i=0; $i<count($this->command);$i++){
            $this->command[$i]->execute();
        }
    }

    public function unexecute()
    {
        for($i=count($this->command)-1;$i>=0;$i--){
            $this->command[$i]->unexecute();
        }
    }
}