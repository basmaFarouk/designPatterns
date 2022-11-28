<?php

require __DIR__ .'/vendor/autoload.php';
// spl_autoload_register(function($class){
//     require $class.'.php';

// });

use App\Tea;

$tea=new Tea(true);
$tea->prepare();
echo '<br>';
$tea2=new Tea(false);
$tea2->prepare();