<?php
namespace App;
class Coffee extends Beverage{

    public function addComponent(){
        echo("Brewing Coffee");
    }

    public function addEdafaat(){
        echo("Adding Milk and Sugar");
    }
}