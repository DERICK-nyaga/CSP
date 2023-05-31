<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;

class CompanyMenuController extends Controller
{
    public function home(){
        return view('home');
    }
    public function inhouse(){
        return view('inhouse');
    }
    public function customers(){
        return view('customer');
    }
    public function requests(){
        return view('parcels');
    }
    public function mus(){
        return view('movables');
    }
    public function profile(){
        return view('profile');
    }

}