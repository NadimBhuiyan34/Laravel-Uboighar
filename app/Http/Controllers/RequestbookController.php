<?php

namespace App\Http\Controllers;
use App\Models\Banner;

use App\Models\requestbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use App\Http\Requests\RequestbookRequest;
use Illuminate\Support\Facades\Validator;

class RequestbookController extends Controller
{

public function create(){
    $banner=Banner::where('is_active',true)->where('option','Request book')->latest()->first();
    return view('frontend.book_form.requestbook',compact('banner'));
}

public function store(RequestbookRequest $request){
    if($file=$request->file('bookimage')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/requestbooks'),$filename);
    }
    $number= rand(1231,7879);
   requestbook::create([
          'user_id'=>$request->user_id,
          'booktitle'=>$request->booktitle,
          'bookauthor'=>$request->bookauthor,
          'bookedition'=>$request->bookedition,
          'bookquantity'=>$request->bookquantity??1,
          'price'=>$request->price,
          'mobile'=>$request->mobile,
          'address'=>$request->address,
          'bookimage'=>$filename??"",
          'status' =>true,
          'order_id' =>$number??'madim'

   ]
   );
   return redirect()->route('requestbooks.create')->withMessage('Successfully submitted');
}




//Admin Sell Book

public function index()
{

    $requestbooks=requestbook::all();
    return view('backend.adminrequestbook.index',compact('requestbooks'));

}


    public function show($requestbook)
    {


     $requestbookshow=requestbook::findOrFail($requestbook);
     return view('backend.adminrequestbook.show',compact('requestbookshow'));

     }



    public function edit($requestbook)
{
      $requestbookedit=requestbook::findOrFail($requestbook);
      return view('backend.adminrequestbook.edit',compact('requestbookedit'));
}

    public function update(RequestbookRequest $request,$requestbook)
{
      $requestbookupdate=requestbook::findOrFail($requestbook);
      $requestbookupdate->update([
           
           'booktitle'=>$request->booktitle,
          'bookauthor'=>$request->bookauthor,
          'bookedition'=>$request->bookedition,
          'bookquantity'=>$request->bookquantity,
          'price'=>$request->price,
          'mobile'=>$request->mobile,
          'address'=>$request->address,
          'status' => $request->is_active ?? false,
       ]
       );
       return redirect()->route('requestbooks.index')->withMessage('Successfully updated');

}

public function destroy($requestbook)
{
      $requestbookshow=requestbook::findOrFail($requestbook)->delete();
      return redirect()->route('requestbooks.index')->withMessage('Successfully Data Deleted');
}

public function trash()
{
    $requestbooks= requestbook::onlyTrashed()->paginate(2);
    return view('backend.adminrequestbook.trash', compact('requestbooks'));

}

public function restore( $id)
{
    try {
        $requestbook= requestbook::onlyTrashed()->whereId($id)->firstOrFail();
        $requestbook->restore();
        return redirect()->back()->withMessage('Successfully Restored!');

    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());

    }
}
public function delete($id)
{

    try {

        $requestbook = requestbook::onlyTrashed()->whereId($id)->firstOrFail();
        $requestbook->forceDelete();
        return redirect()->route('requestbooks.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());



    }

}

public function approved ($id)
    {

        $data = requestbook::findOrFail($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancle ($id)
    {

        $data = requestbook::findOrFail($id);
        $data->status='Cancled';
        $data->save();
        return redirect()->back();
    }



}
