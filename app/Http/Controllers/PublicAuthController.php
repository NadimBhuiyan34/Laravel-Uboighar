<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicAuthController extends Controller
{
    //
    public function index()
    {
        return view('frontend.authpage.login');
    }
    public function register()
    {
        return view('frontend.authpage.register');
    }
}
