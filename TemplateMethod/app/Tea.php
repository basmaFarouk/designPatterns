<?php
namespace App;
class Tea extends Beverage{

    public $edafaat;
    public function __construct($edafaat)
    {
        $this->edafaat=$edafaat;
    }

    public function addComponent(){
        echo("Adding Tea Bag");
    }

    public function addEdafaat(){
        echo("Adding Lemon");
    }

    protected function wantedEdafaat(): bool
    {
        if($this->edafaat)
            return true;
        else
            return false;
    }
}