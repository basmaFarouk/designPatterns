<?php
namespace App;
class Department extends CompanyComponent{
    public string $name;
    public array $subEmployee=[];

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function add(CompanyComponent $c){
        $this->subEmployee[]=$c;
    }

    public function printInfo(){
        echo("$this->name with SubEmployees : {");
        foreach($this->subEmployee  as $e){
            print($e->printInfo());
            echo("<br>");
        }
        echo(" }");
    }
}