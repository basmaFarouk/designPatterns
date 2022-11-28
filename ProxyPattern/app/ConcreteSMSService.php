<?php

namespace App;

class ConcreteSMSService extends SMSService{
    public function sendSMS(string $custID, string $mobile, string $sms)
    {
        return "Customer ID $custID ,SMS Sent to $mobile";
    }
}