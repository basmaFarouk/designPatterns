<?php
// namespace App;

 interface IPizza{

    public function GetDescription();
    public function GetCost();
    public function setCost($cost);
    public function setDesc($desc);
 }