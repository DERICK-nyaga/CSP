<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users/login');
    }

    public function authenticate(Request $request)
    {
       $userLogin = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!Auth::attempt($userLogin)){
            return back()->with('status', 'Invalid details');
        }else{
            $request->session()->regenerate();
            $user = Auth::user();
                    //auth()->attempt($request->only('email', 'password'));

            return redirect()->route('homepage')->with('user', $user);
        }
    }

}