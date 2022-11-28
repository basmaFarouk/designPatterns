<?php

namespace App\Commands;

interface Command{

    public function execute();
    public function unexecute();
}