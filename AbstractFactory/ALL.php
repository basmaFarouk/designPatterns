<?php

use MacFactory as GlobalMacFactory;
use OSFactory as GlobalOSFactory;

interface Factory{
    public function getAlert();
    public function getButton();
}


class MacFactory implements Factory{
    public function getAlert() 
    {
        return new MacAlert();
    }

    public function getButton() 
    {
        return new MacButton();
    }
}

class OSFactory implements Factory{
    public function getAlert()
    {
        return new OSAlert();
    }

    public function getButton()
    {
        return new OSButton();
    }
}

interface Alert{

    public function show();
    public function click();
}
interface Button{

    public function type();
   
}

class MacAlert implements Alert{

    public function show()
    {
        echo "i'm Mac Alert"."<br>";
    }

    public function click()
    {
        echo "you are click on mac click"."<br>";
    }
}
class MacButton implements Button{

    public function type()
    {
        echo "MY type is Mac Button"."<br>";
    }
}

class OSAlert implements Alert{

    public function show()
    {
        echo "i'm OS Alert"."<br>";
    }

    public function click()
    {
        "you are click on OS click"."<br>";
    }
}

class OSButton implements Button{

    public function type()
    {
        echo "MY type is OS Button"."<br>";
    }
}

$OS=new GlobalOSFactory();
$OS->getAlert()->show();
$OS->getButton()->type();

$Mac=new GlobalMacFactory();
$Mac->getAlert()->show();
$Mac->getButton()->type();
