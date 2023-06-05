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
    public function description(){
        return redirect()->route('Company_description');
    }
    public function contacts(){
        return redirect()->route('contacts');
    }
}