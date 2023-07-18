<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Branches;

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
        return view('parcels.create');
    }


    public function checkoutCreate(){
        return redirect()->route('checkout');
    }
    public function checkoutStore(){
    // 
    }
    /**
     *function to fill in user details
     *function to display a form with a checkout button with price on it

     */
    /**
     * Store a newly created resource in storage.
     */
    public function claculatePrice($weight, $fragility) {
        $price = 0;
        $initialweight = 10;
        if($weight <=0 && $weight >=10){
            $price +=330;
        }
        elseif($weight >10 && $weight >=45){
            $price = (($weight - $initialweight)* 20) + 330;
        }
        elseif($weight >45 && $weight <= 100){
            $price = (($weight - $initialweight)* 30) + 330;
        }
        else{
            return redirect()->route('parcels')->withErrors('The weight is above what we transit');
        }
        if($fragility === 'tv'|| 'woofer' || 'fridge' || 'microwave') {
            $price = (($weight - $initialweight) * 50) + 499;
        }
    }

    public function store(Request $request)
    {
        $data = request()->validate([
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
