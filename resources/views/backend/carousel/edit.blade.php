  
    <x-backend.layout.master>
        @slot('title')
        Sell Book Update
        @endslot
    <div class="card mb-4 ">
       
        <div class="card-header "style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Create Carousel
           <a href="{{ route('carousels.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
       
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Carousel Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('carousels.update',['carousel'=>$carousels->id]) }}" method="post" enctype="multipart/form-data">
 
         @csrf
         @method('patch')
             
            
             <x-backend.alertmessage.alertmessage type="success"/>
 
            
          
              
            <div class="col-md-6">
             <x-frontend.form.input name="carouseltitle" text="Carosel Title" type="text" :value="old('caroseltitle',$carousels->carouseltitle)" />
            </div>
            <div class="col-md-6">
             <x-frontend.form.input name="carouselcaption" text="Carousel Caption" type="text" :value="old('carouselcaption',$carousels->carouseltitle)" />
            </div>
            <img src="{{asset('/storage/carousel/'.$carousels->carouselimage)}}" alt="" class="mx-auto img-fluid"  >
            <div class="col-md-12">
             <x-frontend.form.input name="carouselimage" text="Carousel Image" type="file" />
            </div>

             <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Update</button>
            
         </form>   
    </div>
     
 </div>
 
</div>
    </x-backend.layout.master>
 
 
 