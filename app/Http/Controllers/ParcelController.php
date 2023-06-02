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
        return view('parcels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'sender' => 'required',
            'SenderContact' => 'required',
            'receipient' => 'required',
            'ReceipientContact' => 'required',
            'town' => 'required',
            'weight' => 'required',
            'PickupStation' => 'required',
            'DeliveryAddress' => 'required',
            'info' => 'required',
            'tracking_number',
            'category',
            'payment',
            'price',

        ]);
        Parcels::create($data);

        return redirect('/parcel');
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
    public function destroy(Parcels $parcel)
    {
        $parcel->delete();

        return redirect('/parcels');
    }
}