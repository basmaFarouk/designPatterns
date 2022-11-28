<?php

require __DIR__.'/vendor/autoload.php';
use App\GumballMachine;

$gumballMachine= new GumballMachine(5);
var_dump($gumballMachine->getCount());
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
var_dump($gumballMachine->getCount());
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "<br>";
var_dump($gumballMachine->getCount());