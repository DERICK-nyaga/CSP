<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNavController extends Controller
{
    public function home(){
        return redirect()->route('Homepage');
    }
    public function prices(){
        return redirect()->route('Our_prices');
    }
    public function abouts(){
        return redirect()->route('abouts');
    }
    public function contacts(){
        return redirect()->route('contacts');
    }
}