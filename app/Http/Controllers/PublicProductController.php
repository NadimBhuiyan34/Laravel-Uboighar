<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\sellbook;
 
use App\Models\Earnpoint;
 
use App\Models\requestbook;
 
 
use App\Models\donatebook;
 
use Illuminate\Http\Request;

class PublicProductController extends Controller
{
   public function bestbook(){
       return view('frontend.product_page.best_sellbook');
   }
   public function newcollection(){
       return view('frontend.product_page.new_collectionbook');
   }
   public function oldbook(){
       $sellbooks=sellbook::where('status','Approved')->get();
       return view('frontend.product_page.oldbook',compact('sellbooks'));
   }
   public function getdonate(){
       $donatebooks=donatebook::all();
       return view('frontend.product_page.getdonate',compact('donatebooks'));
   }
   public function earnpoint(){

    //    $requestbook=requestbook::with('earnpoint','earnpoint_accept')->get();
       $requestbooks=requestbook::all();
 
       $earn_orders=Earnpoint::all();
       $confirm_orders=Earnpoint::all();
       $banner=Banner::where('is_active',true)->where('option','Earn point')->latest()->first();
       return view('frontend.product_page.earnpoint',compact('requestbooks','earn_orders','confirm_orders','banner'));
 
       
    //    return view('frontend.product_page.earnpoint',compact('requestbooks','banner'));
 
   }
   public function store(Request $request){

    Earnpoint::create([
        'delivery_date'=>$request->delivery_date,
        'message'=>$request->message,
        'user_id'=>$request->user_id,
        'book_id'=>$request->book_id,
        
        
    ]
   );
   return redirect()->route('earnpoint')->withMessage('Successfully submitted your order after varication we confirm you please wait');
 
   }
   public function update(Request $request,$id)
   {
       if($file=$request->file('delivery_image')){
           $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
           $file->move(storage_path('app/public/earnpoints'),$filename);
       }
         $earnpointupdate=Earnpoint::findOrFail($id);
         $order_id=$earnpointupdate->requestbooks->order_id;
         if( $order_id==$request->confirm_id)
         {
            $earnpointupdate->update([
                'delivery_date'=>$request->delivery_date,
                'message'=>$earnpointupdate->message,
                'user_id'=>$earnpointupdate->user_id,
                'book_id'=>$earnpointupdate->book_id,
               'bookimage'=>$filename??'',
               'confirm_id'=>$request->confirm_id,
              ]
              );
              return redirect()->route('earnpoint')->withMessage('Order Confirm Successfully');
         }
         return redirect()->back()->withMessage('Order Id is wrong,Enter valid order id');
         
   
   }
   



   
public function destroy($id)
{
      $earnpoint=Earnpoint::findOrFail($id)->delete();
      return redirect()->back()->withMessage('Your Order deleted');
    
}
}

