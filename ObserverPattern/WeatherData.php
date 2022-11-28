<?php

class WeatherData implements Subject{ //Observable
    private $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        $this->observers=[];
    }

    public function registerObserver($o)
    {
        $this->observers[]=$o;
    }

    public function removeObserver($o)
    {
        unset($this->observers[$o]);
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer){
            $observer->update();
        }
    }

    public function measurementsChanged(){
        return $this->notifyObservers();
    }

    public function setMeasurements($temp,$humidity,$pressure){
        $this->temperature=$temp;
        $this->humidity=$humidity;
        $this->pressure=$pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(){
        return $this->temperature;
    }

    public function getHumidity(){
        return $this->humidity;
    }

    public function getPressure(){
        return $this->pressure;
    }
}