<?php

interface IPizza{

    public function GetDescription();
    public function GetCost();
    public function setCost($cost);
    public function setDesc($desc);
 }

 abstract class ToppingsDecorator{

    public IPizza $tempPizza;

    public function __construct(IPizza $givenPizza)
    {
        $this->tempPizza=$givenPizza;
    }
}

class MozarillaDecorator extends ToppingsDecorator{

    public IPizza $p;
    public function __construct(IPizza $tempPizza)
    {
        $this->p =$tempPizza;
      echo  $this->p->setCost($tempPizza->GetCost() + 10);
    //   echo  ($tempPizza->GetCost() + 10);
    //   echo  $this->p->setDesc($tempPizza->GetDescription()+ "mozarilla");
    }
}

class PlainPizza implements IPizza{

    public int $cost;
    public string $description;

    public function __construct()
    {
        $this->cost=10;
        $this->description="3agena 5afefa";

    }

    public function setCost($cost){
        $this->cost=$cost;
    }

    public function setDesc($desc){
        $this->description=$desc;
    }

    public function GetDescription()
    {
        echo $this->description;
    }

    public function GetCost()
    {
        return $this->cost;
    }
}
$pizza = new PlainPizza();
$pizza->GetDescription();
$mozarilla =new MozarillaDecorator($pizza);
