<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Parcel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Company;
use App\Models\MpesaTransactions;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('users/index');
    }
    public function myparcels(){
        $myparcels = DB::table('parcels')->get();
        return view('users/myparcels', ['myparcels' => $myparcels]);
        // in the view add a function to count the total parcels
        // $user->parcels-count();
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // customize to only fetch branch by company id seleceted only
        $companies = Company::all();
        // $branches = Branches::where('companies_id',$id )->get();
        $branches = DB::table('branches')->get();
        return view('parcels.create',['branches' => $branches]);
    }

    public function userInput(Request $request){
        $validatedData = request()->validate([
            'branch' => 'required',
            'sender' => 'required',
            'phoneNumber' => 'required',
            'receipient' => 'required',
            'ReceipientContact' => 'required',
            'town' => 'required',
            'PickupStation' => 'required',
            'DeliveryAddress' => 'required',
        ]);

        if(empty($request->session()->get('data'))){
            $data = new Parcel();
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }
        else{
            $data = $request->session()->get('data');
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }
        $data = $request->session()->get('data');
        return redirect()->route('weightInput',['data' => $data]);
    }

    public function GoogleMaps(){
        return view('parcels.GoogleMaps');
    }

    public function weightform(Request $request){
        $data = $request->session()->get('data');
        return view('parcels.parcel-weight',['data' => $data]);
    }

    public function calculatePrice(Request $request) {
        $amount = 0;
        $initialweight = 10;
        $data = $request->session()->get('data');
        $data->fill(['weight' => $request->input('weight')]);
        $request->session()->put('data',$data);
        if($request->input('weight') >0 && $request->input('weight') <=10){
            $amount += 330;
            $data = $request->session()->get('data');
            $data->fill(['amount' => $amount]);
            $request->session()->put('data',$data);

            return view('parcels.showprice',['data' => $data]);
       }
        elseif($request->input('weight') >10 && $request->input('weight') <=45){
            $amount = (($request->input('weight') - $initialweight)* 20) + 330;
            $data = $request->session()->get('data');
            $data->fill(['amount' => $amount]);
            $request->session()->put('data',$data);

            return redirect()->route('parcel-cost',['data' => $data]);

        }
        elseif($request->input('weight') >45 && $request->input('weight') <= 100){
            $amount = (($request->input('weight')- $initialweight)* 30) + 330;
            $data = $request->session()->get('data');
            $data->fill(['amount' => $amount]);
            $request->session()->put('data',$data);

            return redirect()->route('parcel-cost',['data' => $data]);
        }
        elseif($request->input('weight') >100){
            return redirect()->back();
        }
        // return redirect()->route('payment',['price', $price]);
        // else{
        //     return redirect()->route('parcels');
        // }
        // if($fragility === 'tv'|| 'woofer' || 'fridge' || 'microwave') {
        //     $price = (($weight - $initialweight) * 50) + 499;
        // }
    }

    public function cost(Request $request){
        $data = $request->session()->get('data');
        return view('parcels.showprice', ['data' => $data]);
    }

    public function paymentMethod(Request $request){
        $data = $request->session()->get('data');
        $data->fill(['payment' => $request->input('payment')]);
        if($request->input('payment') == 'mpesa'){
            $this->Sendstkpush($data->amount,$data->phoneNumber,$data->parcel_id);
            return redirect()->route('checkout');

        }
        else{
            $request->session()->put('data',$data);

            return redirect()->route('checkout',['data' => $data]);
        }

    }

    public function Sendstkpush($amount, $phoneNumber, $parcel_id)
    {

        $combined = env('DARAJA_CONSUMER_KEY') . ':' . env('DARAJA_CONSUMER_SECRET');
        Log::info($combined);
        $credentials = base64_encode($combined);
        $accessToken = Http::withHeaders(['Authorization' => 'Basic ' . $credentials])
            ->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials')
            ->json('access_token');

        $mpesaOnlineShortcode = "174379";
        $BusinessShortCode = $mpesaOnlineShortcode;
        $mpesaOnlinePasskey = env('MPESAONLINEPASS');
        date_default_timezone_set('Africa/Nairobi');
        $timestamp =  date('YmdHis');
        $dataToEncode = $BusinessShortCode . $mpesaOnlinePasskey . $timestamp;
        $password = base64_encode($dataToEncode);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $accessToken
        ])->post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest', [
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phoneNumber,
            'PartyB' => $BusinessShortCode,
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => 'https://4265-154-122-149-3.ngrok-free.app/callback/receivefunds?token=derick',
            'AccountReference' => 'DNGC',
            'TransactionDesc' => 'PAYING ORDER AMOUNT FOR SYMACOMMERCE'
        ])->json();
        Log::info($response);

        return $response['ResponseCode'] === 0;
    }


    public function checkout(Request $request){
        $data = $request->session()->get('data');
        return view('parcels.check-out', ['data' => $data]);
    }

    public function store(Request  $request)
    {
        $data = $request->session()->get('data');
        $data->fill(['parcel_id'=>mt_rand(10000,9999999999)]);
        $request->session()->put('data', $data);
        $data->save();
        $request->session()->forget('data');
        return redirect()->route('home');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parcel $parcel)
    {
        $parcel->delete();

        return redirect('/parcels');
    }
}
