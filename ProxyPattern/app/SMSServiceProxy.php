<?php
namespace App;
class SMSServiceProxy extends SMSService{

    private ?SMSService $smsService = null;
    public $arr=[];
    public function sendSMS(string $custID, string $mobile, string $sms)
    {
        if($this->smsService == NULL){
            $this->smsService = new ConcreteSMSService();
        }

        //First Call
        if(!array_key_exists($custID,$this->arr)){
            $this->arr[$custID]=1;

        }elseif($this->arr[$custID]==3){
            return "Not Send";
        }else{
            $this->arr[$custID]+=1;

        }

        return $this->smsService->sendSMS($custID,$mobile,$sms);
    }
}