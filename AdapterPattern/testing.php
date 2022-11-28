<?php

spl_autoload_register(function($class){
    require './'.$class.'.php';
});

$enemies=[];

array_push($enemies,new EnemyTank());
array_push($enemies,new EnemyPlane());
array_push($enemies,new SardeenaAdapter(new Sardeena()));
foreach ($enemies as $enemy){
        $enemy->fireCanols();
        echo '<br>';
        $enemy->refillBanzine().'<br>';
        echo '<br>';
};