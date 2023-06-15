<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users/company');
        // return view('companies/dashboard');
    }

    public function our_inhouse()
    {
        return view('companies/inhouse');
    }
    public function our_customers(){
        return view('companies/customers');
    }
    public function dropoff_requests(){
        return view('companies/dropoffs');
    }
    public function movable_units(){
        return view('companies/movables');
    }
    public function company_profile(){
        return view('companies.edit');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = Company::create([
            'CompanyName' => $request->input('CompanyName'),
            'address' => $request->input('address'),
            'location' => $request->input('location'),
            'pricing' => $request->input('pricing'),
            'description' => $request->input('description'),
            'about' => $request->input('about'),
        ]);

        $company->save();
        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::find($id);

        return view('users/company')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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