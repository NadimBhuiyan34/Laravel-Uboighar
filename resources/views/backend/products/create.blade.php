 
    <x-backend.layout.master>
        @slot('title')
        Add Product
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
           Add Product
           <a href="{{ route('products.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Add New Product" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              
                 
                 <br>
                

                 <x-backend.alertmessage.alertmessage type="success"/> 
                
                <select name="category" id="" class="form-select" aria-label="Default select example">
                    <option value="">Select Chategory</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
               
                <div class="col-md-6">
                    <x-frontend.form.input name="booktitle" text="Book Tile" type="text" :value="old('booktitle')" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor')" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition')" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity')" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="price" text="Price" type="text" :value="old('price')" />
               </div>
                
                  <div class="col-md-12">
                    <x-frontend.form.input name="bookimage" text="Book Image" type="file"/>
                  </div>
                  
               <div class="form-check">
                <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" checked>
                <label class="form-check-label" for="isActiveInput">
                    Is Active
                </label>
            </div>
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Add Product</strong></button>
                     <a href="{{ route('products.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 