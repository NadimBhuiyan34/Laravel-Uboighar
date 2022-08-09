<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\donatebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use App\Http\Requests\DonatebookRequest;

class DonatebookController extends Controller
{
    public function create(){
        $banner=Banner::where('is_active',true)->where('option','Donate book')->latest()->first();
        return view('frontend.book_form.donatebook',compact('banner'));
    }

    public function store(DonatebookRequest $request){

        if($file=$request->file('bookimage')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/donatebook'),$filename);
        }
       donatebook::create([
        'user_id'=>$request->user_id,
        'fullname'=>$request->fullname,
        'email'=> $request->email,
        'address'=> $request->address,
        'mobile'=> $request->mobile,
        'booktitle'=>$request->booktitle ,
        'bookauthor'=> $request->bookauthor,
        'bookedition'=>$request->bookedition ,
        'bookquantity'=>$request->bookquantity,
        'bookimage'=>$filename,
        'status'=>'In progres'
       ]
       );
       return redirect()->route('donatebooks.create')->withMessage('Successfully submitted');
    }




    //Admin Sell Book

    public function index()
    {

        $donatebooks=donatebook::all();

        return view('backend.admindonatebook.index',compact('donatebooks'));
    }


        public function show($donatebook)
        {


         $donatebookshow=donatebook::findOrFail($donatebook);
         return view('backend.admindonatebook.show',compact('donatebookshow'));

         }



        public function edit(Request $request)
    {
          $donatebookedit=donatebook::findOrFail($request->donatebook);
          return view('backend.admindonatebook.edit',compact('donatebookedit'));
    }







        public function update(DonatebookRequest $request,$donatebook)
    {
        if($file=$request->file('bookimage')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/donatebook'),$filename);
        }

          $donatebookupdate=donatebook::findOrFail($donatebook);
          $donatebookupdate->update([
            'fullname'=>$request->fullname,
            'email'=> $request->email,
            'address'=> $request->address,
            'mobile'=> $request->mobile,
            'booktitle'=>$request->booktitle ,
            'bookauthor'=> $request->bookauthor,
            'bookedition'=>$request->bookedition ,
            'bookquantity'=>$request->bookquantity ??"" ,
            'status'=>'In progress',
            'bookimage'=>$filename,

           ]
           );
           return redirect()->route('donatebooks.index')->withMessage('Successfully updated');

    }

    public function destroy(Request $request)
    {
          $donatebookshow=donatebook::findOrFail($request->donatebook)->delete();
          return redirect()->route('donatebooks.index')->withMessage('Successfully Data Deleted');
    }

    public function trash()
{
    $donatebooks= donatebook::onlyTrashed()->paginate(2);
    return view('backend.admindonatebook.trash', compact('donatebooks'));

}

public function restore( $id)
{
    try {
        $donatebook= donatebook::onlyTrashed()->whereId($id)->firstOrFail();
        $donatebook->restore();
        return redirect()->back()->withMessage('Successfully Restored!');

    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());

    }
}
public function delete($id)
{

    try {

        $donatebook = donatebook::onlyTrashed()->whereId($id)->firstOrFail();
        $donatebook->forceDelete();
        return redirect()->route('donatebooks.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());



    }

}



}
