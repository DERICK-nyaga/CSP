<?php

namespace App\Http\Controllers;

use App\Models\MpesaTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\Parcel;

class MpesaController extends Controller
{
    //send stk push
         //complete mpesa transaction
    public function Completedarajatrans(Request $request)
    {
        $parcel_id= $request->query('parcel_id');
        $token = $request->input('token');
        if ($token != 'derick') {
            return response()->json(['message' => 'Invalid authorization'], 403);
        }
        //get the parcel details 
        $parcel = Parcel::find($parcel_id);
        

        //get the contents sent from mpesa
        $json = $request->getContent();
        $data = json_decode($json, true);

        $MerchantRequestID = $data['Body']['stkCallback']['MerchantRequestID'];
        $CheckoutRequestID = $data['Body']['stkCallback']['CheckoutRequestID'];
        $ResultCode = $data['Body']['stkCallback']['ResultCode'];
        $ResultDesc = $data['Body']['stkCallback']['ResultDesc'];
        $TransactionDate = $data['Body']['stkCallback']['CallbackMetadata']['Item'][3]['Value'];
        $Amount = $data['Body']['stkCallback']['CallbackMetadata']['Item'][0]['Value'];
        $MpesaReceiptNumber = $data['Body']['stkCallback']['CallbackMetadata']['Item'][1]['Value'];
        $PhoneNumber = $data['Body']['stkCallback']['CallbackMetadata']['Item'][4]['Value'];

        //if the amount paid matches the orderamount required
        if ($Amount == $parcel->totalamount) {
            $parcel->orderstatus = 'intransit';
            $parcel->paymentstatus = 'paid';
            $parcel->save();
        }
        //save the transaction
        MpesaTransactions::create([
            'MerchantRequestID' => $MerchantRequestID,
            'CheckoutRequestID' => $CheckoutRequestID,
            'ResultCode' => $ResultCode,
            'ResultDesc' => $ResultDesc,
            'Amount' => $Amount,
            'MpesaReceiptNumber' => $MpesaReceiptNumber,
            'TransactionDate' => $TransactionDate,
            'PhoneNumber' => $PhoneNumber
        ]);

        return response()->json(['ResultCode' => 0, 'ResultDesc' => 'Confirmation received successfully']);
    }
}