<?php
namespace App;

use Exception;

abstract class CompanyComponent{

    public abstract function printInfo();

    public function add(CompanyComponent $c){
        throw new Exception('UnSupported Operation');
    }
}