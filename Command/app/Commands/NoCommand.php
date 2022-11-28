<?php
namespace App\Commands;

class NoCommand implements Command{

    public function execute()
    {
        echo "no command";
    }

    public function unexecute()
    {
        
    }
}