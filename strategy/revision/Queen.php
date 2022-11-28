<?php

class Queen extends Character{
    
    public function __construct($name)
    {
        parent::__construct($name);
        $this->weapon=new AxeBehaviour();
    }
}