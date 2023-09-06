<?php

namespace App\Http\Payments;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MpesaStkpush extends Controller
{
    public static function SendMpesaStkPush(){
        $consumerKey = "cINBlvIsCqDGIzuA4Aihuo3K3caAMo4V";
        $consumerSecret = "PKuMh4AZqh1jr7AU";
        $Business_Code = '174379';
        $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $Type_of_Transaction = 'CustomerPayBillOnline';
        $access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $phone_number = '254797871932';
        $OnlinePayment = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $total_amount = '1';
        $CallBackURL = 'https://4265-154-122-149-3.ngrok-free.app/mpesacallback.php?key=dnlc';
        $Time_Stamp = date("Ymdhis");
        $password = base64_encode($Business_Code . $Passkey . $Time_Stamp);

   
    }
    public function mpesacallback(Request $request){
        // 
    }
}