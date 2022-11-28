<?php

// use App\IPizza;

abstract class ToppingsDecorator{

    public IPizza $tempPizza;

    public function __construct(IPizza $givenPizza)
    {
        $this->tempPizza=$givenPizza;
    }
}