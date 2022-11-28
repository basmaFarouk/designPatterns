<?php
namespace App\Commands;

use App\Receivers\Fan;

class SpeedUpCommand implements Command{

    public Fan $fan;

    public function __construct(Fan $fan)
    {
        $this->fan=$fan;
    }
    public function execute()
    {
        $this->fan->speenUp();
    }

    public function unexecute()
    {
        $this->fan->speenDown();
    }

    
}