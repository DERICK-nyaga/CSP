<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
// use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
     }
     public function allcompanies(){
        return view('users/allcompanies');
     }
     public function prices()
     {
        return view('support/prices');
     }
     public function about(){
        $abouts = DB::table('abouts')->get();
        return view('support/abouts', ['abouts' => $abouts]);
     }
     public function contactus(){
         return view('support/contactus');
     }
     public function singlecompany(){
        return view('users/company');
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
        $validator = Validator::make($request->all(),[
            'fname' => 'required|min:2|max:100',
            'lname' => 'required|min:2|max:100',
            'username' => 'required|min:2|max:100',
            'email'=> 'required|email|max:150|unique:users',
            'mobile'=> 'required',
            'password' => 'required|min:6|max:16|confirmed',
        ]);

       User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->newPassword),
    ]);
    //    auth()->attempt($request->only('email', 'password'));
        return redirect()->route('login');
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
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
   }
}
