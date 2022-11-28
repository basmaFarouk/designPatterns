<?php

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