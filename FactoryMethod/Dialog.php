<?php
namespace DESIGNPATTERNS\FactoryMethod;

abstract class Dialog{

    abstract public function createdButton(): Button;
}