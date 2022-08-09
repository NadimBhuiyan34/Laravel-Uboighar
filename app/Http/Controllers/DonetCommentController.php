<?php

namespace App\Http\Controllers;

use App\Models\donatebook;
use Illuminate\Http\Request;



class DonetCommentController extends Controller
{

    public function store(Request $request, $donatebook)
    {
        $donatebook=donatebook::find($donatebook);
        $donatebook->comments()->create([
            'body'=>$request->comment,
            'commented_by'=>auth()->user()->id
        ]);
        return redirect()->back();
    }


}
