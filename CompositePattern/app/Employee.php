<?php
namespace App;
class Employee extends CompanyComponent{
    public string $name;
    public string $salary;

    public function __construct($name,$salary)
    {
        $this->name=$name;
        $this->salary=$salary;
    }

    public function printInfo(){
        echo ("Name: $this->name , with Salary: $this->salary");
    }
}