<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;

class CompanyMenuController extends Controller
{
    public function home(){
        return redirect()->route('companies');
    }
    public function inhouse(){
        return redirect()->route('our_inhouse');
    }
    public function customers(){
        return redirect()->route('our_customers');
    }
    public function requests(){
        return redirect()->route('dropoffs');
    }
    public function mus(){
        return redirect()->route('mu');
    }
    public function profile(){
        return redirect()->route('company_profile');
    }

}