<?php

use App\SMSServiceProxy;

require __DIR__ .'/vendor/autoload.php';
// use ConcreteSMSService as GlobalConcreteSMSService;
// use SMSServiceProxy as GlobalSMSServiceProxy;

// abstract class SMSService{

//     public abstract function sendSMS(string $custID, string $mobile, string $ms);
// }

// class ConcreteSMSService extends SMSService{
//     public function sendSMS(string $custID, string $mobile, string $ms)
//     {
//         return "Customer ID $custID ,SMS Sent to $mobile";
//     }
// }

// class SMSServiceProxy extends SMSService{

//     private $smsService =NULL;
//     public $arr=[];
//     public function sendSMS(string $custID, string $mobile, string $sms)
//     {
//         if($this->smsService == NULL){
//             $this->smsService = new ConcreteSMSService();
//         }

//         //First Call
//         if(!array_key_exists($custID,$this->arr)){
//             $this->arr[$custID]=1;

//         }elseif($this->arr[$custID]==3){
//             return "Not Send";
//         }else{
//             $this->arr[$custID]+=1;
//         }

//         return $this->smsService->sendSMS($custID,$mobile,$sms);
//     }
// }

$sms=new SMSServiceProxy();
echo($sms->sendSMS('123','011558899','message 1').'<br>');
echo($sms->sendSMS('123','011558899','message 2').'<br>');
echo($sms->sendSMS('123','011558899','message 3').'<br>');
echo($sms->sendSMS('123','011558899','message 4').'<br>');