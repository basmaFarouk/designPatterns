<?php
namespace App\Commands;

use App\Receivers\Fan;

class SpeedDownCommand implements Command{

    public Fan $fan;

    public function __construct(Fan $fan)
    {
        $this->fan=$fan;
    }
    public function execute()
    {
        $this->fan->speenDown();
    }

    public function unexecute()
    {
        $this->fan->speenUp();
    }
}