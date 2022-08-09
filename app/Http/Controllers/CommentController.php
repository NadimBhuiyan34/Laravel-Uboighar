<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\sellbook;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request, sellbook $sellbook)
    {

        $sellbook->comments()->create([
            'body'=>$request->comment,
            'commented_by'=>auth()->user()->id
        ]);
        return redirect()->back();
    }


    public function show(Comment $comment)
    {
        //
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy(Comment $comment)
    {
        //
    }
}
