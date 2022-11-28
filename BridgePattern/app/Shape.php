<?php
namespace App;
abstract class Shape{
    public Key $key;

    public function __construct($key)
    {
        $this->key=$key;
    }
    public abstract function getDescription();

}