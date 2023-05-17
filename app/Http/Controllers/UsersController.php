<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data  = $request([
        //     'passowrd' '!=' 'cpassword' => 'passwords must match'
        // ]);
        $user = User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->newPassword),
        ]);

        $user->save();
        //temporary redirect
        return redirect('users.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/companies');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = User::find($id)->first();

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->update([
           'fname' => $request->input('fname'),
           'lname' => $request->input('lname'),
           'email' => $request->input('email'),
           'mobile' => $request->input('mobile'),
        ]);
        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

   }
}