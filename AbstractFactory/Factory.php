<?php

interface Factory{
    public function getAlert():Alert;
    public function getButton():Button;
}