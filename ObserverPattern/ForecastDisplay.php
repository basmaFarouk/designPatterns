<?php

class ForecastDisplay implements Observer,DisplayElement{ //Observer

    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData=$weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update()
    {
        $this->temperature=$this->weatherData->getTemperature();
        $this->humidity=$this->weatherData->getHumidity();
        $this->display();
    }

    public function display()
    {
        echo(" Current Conditions : ".$this->temperature." F degrees and ".$this->humidity." % humidity <br>");
    }
}