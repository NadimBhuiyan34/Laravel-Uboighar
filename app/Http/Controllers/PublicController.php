<?php

namespace App\Http\Controllers;
use App\Models\carousel;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $carousels=carousel::all();
        
        return view('frontend.home',compact('carousels'));
    }
  
    //logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homepage')->with('message','You have been logged Out');
    }

    
    
}
