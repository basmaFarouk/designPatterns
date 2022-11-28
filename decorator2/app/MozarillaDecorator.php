<?php

// use App\IPizza;
require './IPizza.php';
require './ToppingsDecorator.php';

class MozarillaDecorator extends ToppingsDecorator{

    public IPizza $p;
    public function __construct(IPizza $givenPizza)
    {
        $this->p =$this->tempPizza;
      echo  $this->p->setCost($this->tempPizza->GetCost() + 10);
      echo  $this->p->setDesc($this->tempPizza->GetDescription()+ "mozarilla");
    }
}