<?php

namespace App\Http\Controllers;

use App\Models\Parcels;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.OnlineBooking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Parcels::make($request->all(),[
            'sender' => 'required',
            'SenderContact' => 'required',
            'receipient' => 'required',
            'ReceipientContact' => 'required',
            'town' => 'required',
            'weight' => 'required',
            'PickupStation' => 'required',
            'DeliveryAddress' => 'required',
            'info' => 'required',
        ]);
        $parcel = Parcels::create([
        'sender' => $request->input( 'sender'),
        'SenderContact' => $request->input('SenderContact'),
        'receipient' => $request->input('receipient'),
        'ReceipientContact' => $request->input('ReceipientContact'),
        'town' => $request->input('town'),
        'weight' => $request->input('weight'),
        'PickupStation' => $request->input('PickupStation'),
        'DeliveryAddress' => $request->input('DelliveryAddress'),
        'info' => $request->input('info'),

        ]);
        $parcel->save();
        return redirect('/users/parcel');  
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
    public function destroy(string $id)
    {
        //
    }
}