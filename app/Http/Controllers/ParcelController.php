<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Company;
class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users/index');
    }
    public function myparcels(){
        $myparcels = DB::table('parcels')->get();
        return view('users/myparcels', ['myparcels' => $myparcels]);
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
            'user_id',
            'branch' => 'required',
            'sender' => 'required',
            'SenderContact' => 'required',
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
        return redirect()->route('weightInput');
    }

    public function weightform(){
        return view('parcels.parcel-weight');
    }
    
    public function calculatePrice(Request $request) {
        $price = 0;
        $initialweight = 10;
        $data = $request->session()->get('data');
        if($request->input('weight') <=0 && $request->input('weight') >=10){
            $price += 330;
            $data = $request()->session()->get('data');
            $data->fill(['price' => $price]);
            $request->session()->put('data',$data);

            return redirect()->route('parcel-cost',['price', $price]);
       }
        elseif($request->input('weight') >10 && $request->input('weight') >=45){
            $price = (($request->input('weight') - $initialweight)* 20) + 330;
            $data = $request->session()->get('data');
            $data->fill(['price' => $price]);
            $request->session()->put('data',$data);
            
            return redirect()->route('parcel-cost',['price', $price]);
            
        }
        elseif($request->input('weight') >45 && $request->input('weight') >= 100){
            $price = (($request->input('weight')- $initialweight)* 30) + 330;
            $data = $request->session()->get('data');
            $data->fill(['price' => $price]);
            $request->session()->put('data',$data);

            return redirect()->route('parcel-cost',['price', $price]);
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
        $paymentmode = request()->validate([
            'price' => 'required',
            'payment' => 'required',
        ]);
        $data = $request->session()->get('data');
        $data->fill(['paymentmode' => $paymentmode]);
        $request->session()->put('data',$data);

        // $data = $request->session()->get('data');
        // Parcel::create($data);
        // $request->session()->forget('data');
        return redirect()->route('checkout');
    }
    
    // public function checkoutCreate(){
    //     return redirect()->route('checkout');
    // }

    // public function checkoutStore(){
    //     //
    //     }
    public function store(Request  $request)
    {
        $data = $request->session()->get('data');
        Parcel::create($data);
        $request->session()->forget('data');
        return redirect()->route('parcels');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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