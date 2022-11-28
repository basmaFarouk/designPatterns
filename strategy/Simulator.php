<?php
spl_autoload_register(function($class){
        require './'.$class.'.php';
    });






         $b1 = new magroo7a();
         var_dump($b1->perform());

         echo "<br>";
         $b2=new le3ba();
         echo($b2->perform());

