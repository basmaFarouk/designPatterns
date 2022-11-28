<?php

namespace App\Commands;

use App\Receivers\Light;

class LightOnCommand implements Command{

    public Light $light;

    public function __construct(Light $light)
    {
        $this->light=$light;
    }
    public function execute()
    {
        $this->light->ON();
    }

    public function unexecute()
    {
        $this->light->OFF();
    }
}