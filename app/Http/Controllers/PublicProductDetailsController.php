<?php

namespace App\Http\Controllers;

use App\Models\Donet;
use App\Models\sellbook;
use App\Models\donatebook;
use Illuminate\Http\Request;

class PublicProductDetailsController extends Controller
{

    public function bookdetails($bookdetail)
    {
        $bookdetail = sellbook::findOrFail($bookdetail);
        $books=sellbook::all();
        return view('frontend.product_details.book_details', compact('bookdetail','books'));
    }
    public function donetbookdetails($donetbookdetails)
    {
        $books=donatebook::all();
        $bookdetail = donatebook::findOrFail($donetbookdetails);
        return view('frontend.product_details.donate_book_details', compact('bookdetail','books'));
    }



    public function cartproduct($cart)
    {
        // $cart = sellbook::findOrFail($cart);
        return view('frontend.product_details.cart');
    }
    public function payment($pay)
    {
        $pay = sellbook::findOrFail($pay);
        return view('frontend.product_details.payment', compact('pay'));
    }
}
