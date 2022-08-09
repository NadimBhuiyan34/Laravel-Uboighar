<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store()
    {
         
        return response()->json(
            [
                'data'=>request()->all()
            ]
        );
    }
}
 
