<?php

namespace App\Http\Controllers;
use App\Models\carousel;
use App\Http\Requests\CarouselRequest;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    
    public function create(){
        return view('backend.carousel.create');
    }
    
    public function store(CarouselRequest $request){
             
        if($file=$request->file('carouselimage')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/carousel'),$filename);
        }
         carousel::create([
        'carouseltitle'=>$request->carouseltitle,
        'carouselcaption'=>$request->carouselcaption,
        'carouselimage'=>$filename,
        
       ]
       );
       return redirect()->route('carousels.index')->withMessage('New carousel successfully added');
    }
    
    
    
    
    //Admin Sell Book
    
    public function index()
    {
  
        $carousels=carousel::all();
        return view('backend.carousel.index',compact('carousels'));
    }
    
    
        public function show($carousel)
        {
     
         $carouselshow=carousel::findOrFail($carousel);
         return view('backend.carousel.show',compact('carouselshow'));
             
         }
    
    
     
        public function edit($carousel)
    {
        
          $carousels=carousel::findOrFail($carousel);
          return view('backend.carousel.edit',compact('carousels'));  
    }
     
        public function update(Request $request,$carousel)
    {
        if($file=$request->file('carouselimage')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/carousel'),$filename);
        }
          $carouselupdate=carousel::findOrFail($carousel);
          $carouselupdate->update([
            'carouseltitle'=>$request->carouseltitle,
            'carouselcaption'=>$request->carouselcaption,
            'carouselimage'=>$filename??$carouselupdate->carouselimage,
           ]
           );
           return redirect()->route('carousels.index')->withMessage('Successfully updated');
           
    }
    
    public function destroy($carousel)
    {
           carousel::findOrFail($carousel)->delete();
          return redirect()->route('carousels.index')->withMessage('Successfully Data Deleted');       
    }
      
}
