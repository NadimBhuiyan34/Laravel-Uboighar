<?php

namespace App\Http\Controllers;
use App\Models\getdonate;
use Illuminate\Http\Request;
class Getdonatecontoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdonate=getdonate::all();
        return view('backend.getdonate.index',compact('getdonate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }


    public function store(Request $request)
    {

   getdonate::create([
    'fullname'=>$request->fullname,
    'email'=> $request->email,
    'address'=> $request->address,
    'mobile'=> $request->mobile,
    'describe'=>$request->describe,
    'booktitle'=>$request->booktitle ,
    'bookauthor'=> $request->bookauthor??'',
    'bookedition'=>$request->bookedition??"",
   ]
   );
   return redirect()->back()->withMessage('Successfully submitted Request. If your Request is approved Authority will send mail with in two days');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
