 
    <x-backend.layout.master>
        @slot('title')
       Product Update
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Product Update
           <a href="{{ route('products.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Product Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('products.update',['product'=>$productedit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                    <x-frontend.form.input name="booktitle" text="Book Tile" type="text" :value="old('booktitle', $productedit->booktitle)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $productedit->bookauthor)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition', $productedit->bookedition)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity', $productedit->bookquantity)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="price" text="Price" type="text" :value="old('price', $productedit->price)" />
               </div>
                
               <div class="col-md-12">
                <img src="{{asset('/storage/products/'.$productedit->bookimage)}}" alt="" style="width:200px;height:100px">
              </div>
                 
                   
                  <div class="col-md-12">
                    <x-frontend.form.input name="bookimage" text="Book Image" type="file"/>
                  </div>
                      
               <div class="form-check">
                <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" {{ $productedit->status ? 'checked' : '' }} >
                    
               
                <label class="form-check-label" for="isActiveInput">
                    Is Active
                </label>
            </div> 
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('products.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 