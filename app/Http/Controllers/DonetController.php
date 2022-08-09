<?php

namespace App\Http\Controllers;


use App\Models\donatebook;
use Illuminate\Http\Request;

class DonetController extends Controller
{
    public function Drequest($donet)
    {

        $donet = donatebook::findOrFail($donet);
        return view('frontend.book_form.donaterequest',compact('donet'));
    }

    public function approved ($id)
    {

        $data = donatebook::findOrFail($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancle ($id)
    {

        $data = donatebook::findOrFail($id);
        $data->status='Cancled';
        $data->save();
        return redirect()->back();
    }








}
