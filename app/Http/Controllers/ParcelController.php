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


    public function checkoutCreate(){
        return redirect()->route('checkout');
    }
    public function checkoutStore(){
    //
    }
    /**
     *function to display a form with a checkout button with price on it
     */
    /**
     * Store a newly created resource in storage.
     */
    public function claculatePrice(Request $request) {
        $price = 0;
        $initialweight = 10;
        if($request->input('weight') <=0 && $request->input('weight') >=10){
            $price +=330;
        }
        elseif($request->input('weight') >10 && $request->input('weight') >=45){
            $price = (($request->input('weight') - $initialweight)* 20) + 330;
        }
        elseif($request->input('weight') >45 && $request->input('weight') <= 100){
            $price = (($request->input('weight')- $initialweight)* 30) + 330;
        }
        else{
            return redirect()->route('parcels')->withErrors('The weight is above what we transit');
        }
        // if($fragility === 'tv'|| 'woofer' || 'fridge' || 'microwave') {
        //     $price = (($weight - $initialweight) * 50) + 499;
        // }
    }

    public function store(Request  $request)
    {
        $data = request()->validate([
            'user_id',
            'branch' => 'required',
            'sender' => 'required',
            'SenderContact' => 'required',
            'receipient' => 'required',
            'ReceipientContact' => 'required',
            'town' => 'required',
            'weight' => 'required',
            'PickupStation' => 'required',
            'DeliveryAddress' => 'required',
            'payment' => 'required',
            'price' => 'required',

        ]);
        
        Parcel::create($data);
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