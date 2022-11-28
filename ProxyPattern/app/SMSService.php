<?php

namespace App;
abstract class SMSService{

    public abstract function sendSMS(string $custID, string $mobile, string $ms);
}