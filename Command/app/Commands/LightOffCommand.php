<?php

namespace App\Commands;

use App\Receivers\Light;

class LightOffCommand implements Command{

    public Light $light;

    public function __construct(Light $light)
    {
        $this->light=$light;
    }
    public function execute()
    {
        $this->light->OFF();
    }

    public function unexecute()
    {
        $this->light->ON();
    }
}