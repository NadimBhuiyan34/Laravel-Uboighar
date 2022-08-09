<?php

namespace App\Http\Controllers;
use App\Models\Earnpoint;
use Illuminate\Http\Request;

class EarnpointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $earn_orders=Earnpoint::all();
        return view('backend.earn_order_list.index',compact('earn_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $earnorder=Earnpoint::findOrFail($id);
        return view('backend.earn_order_list.edit',compact('earnorder'));
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
        $earnorderupdate=Earnpoint::findOrFail($id);
        $earnorderupdate->update([
  
            'delivery_date'=>$request->delivery_date??$earnorderupdate->delivery_date,
            'message'=>$request->message??$earnorderupdate->message,
            'user_id'=>$request->user_id??$earnorderupdate->user_id,
            'book_id'=>$request->book_id??$earnorderupdate->book_id,
            'status'=>$request->status ?? false,
         ]
         );
         $earnorderupdate->requestbooks()->update([
            'status' => $request->status ?? false,
             
            
             
        ]);
         return redirect()->route('earnorders.index')->withMessage('Successfully updated');
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
