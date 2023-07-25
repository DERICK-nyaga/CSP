<?php

// namespace App\Http\Controllers;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse;

// class LoginController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         return view('users/login');
//     }
//     public function authenticate(Request $request): RedirectResponse
//     {
//        $userLogin = $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//         ]);
//         $user = User::where('email', $request->email)->exists();
//         if($user && User::where(Hash::check($request->password, $user->password))){
//         return redirect()->intended('homepage');
//         }
//         else{
//             return back()->withErrors([
//                 'passowrd' => 'The password is incorrect.',
//             ])->onlyInput('password');
//         }

// }
// }