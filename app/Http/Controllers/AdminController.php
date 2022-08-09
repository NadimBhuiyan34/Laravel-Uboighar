<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellbook;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function productlist(){
        return view('backend.productlist');
    }
    public function register(){
        return view('auth.register');
    }

   
}
