<?php

 spl_autoload_register(function($class){
    require './'.$class.'.php';
 });
$weatherData= new WeatherData();
$currentDisplay= new CurrentConditionDisplay($weatherData);
$forecastDisplay= new ForecastDisplay($weatherData);
$weatherData->setMeasurements(80,65,30.4);
$weatherData->setMeasurements(70,20,30.4);