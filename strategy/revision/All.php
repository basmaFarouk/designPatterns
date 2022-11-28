<?php

spl_autoload_register(function($class){
    require './'.$class.'.php';
});

$queen=new Queen("basma");
$queen->perform();
echo "<br>";
$king=new King("ayad");
$king->perform();