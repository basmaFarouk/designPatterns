<?php

interface observer {
    public function add(Company $subject);
    //public function remove($subject);
    public function notify($price);

};

interface Company{
    public function update($price);
}

//Concrete Classes
class StockStim implements observer{
    private $companies=[];
    public function add(Company $subject)
    {
        array_push($this->companies , $subject);
    }

    public function updatePrices(){
        $this->notify(rand(23.99,199.42));
    }

    public function notify($price)
    {
        foreach($this->companies as $camp){
            $camp->update($price*rand(23.99,199.42));
        }
    }
}


class Google implements Company{

    private $price;

    public function __construct($price)
    {
        $this->price=$price;
        echo "<p> Creating Google at ".$this->price."</p>";
    }

    public function update($price)
    {
        $this->price=$price;
        echo "<p> Google setting for ".$this->price."</p>";
    }
}

class Walmart implements Company{

    private $price;

    public function __construct($price)
    {
        $this->price=$price;
        echo "<p> Creating Walmart at ".$this->price."</p>";
    }

    public function update($price)
    {
        $this->price=$price;
        echo "<p> Walmart setting for ".$this->price."</p>";
    }
}


//client

$stockStim=new StockStim();
$camp1=new Google(19.99);
$camp2=new Walmart(15.99);

//
$stockStim->add($camp1);
$stockStim->add($camp2);
$stockStim->updatePrices();


?>