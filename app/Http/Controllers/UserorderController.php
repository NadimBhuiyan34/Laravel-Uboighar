<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requestbook;
class UserorderController extends Controller
{
    public function show($id)
    {

        $requestbooks=requestbook::where('user_id', $id)->get();
     return view('frontend.orders.show',compact('requestbooks'));


     }
}
