<?php

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