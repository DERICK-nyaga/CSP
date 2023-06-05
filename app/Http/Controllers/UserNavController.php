<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNavController extends Controller
{
    public function home(){
        return redirect()->route('contactus');
    }
    public function prices(){
        return redirect()->route('prices');
    }
    public function description(){
        return redirect()->route('description');
    }
    public function contact_us(){
        return redirect()->route('contacts');
    }
}