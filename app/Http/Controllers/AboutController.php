<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function about(){
        $abouts = DB::table('abouts')->get();
        return view('support/abouts', ['abouts' => $abouts]);
     }
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.createabout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create([
            'town' => $request->input('town'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'avenue' => $request->input('avenue'),
            'street' => $request->input('street'),
            'building' => $request->input('building'),
            'floor' => $request->input('floor'),
            'roomnumber' => $request->input('roomnumber'),
            'weekdaysopening' => $request->input('weekdaysopening'),
            'weekendsopening' => $request->input('weekendsopening'),
            'weekdaysclosing' => $request->input('weekdaysclosing'),
            'weekendclosing' => $request->input('weekendclosing'),
        ]);
        return redirect()->route('services');
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