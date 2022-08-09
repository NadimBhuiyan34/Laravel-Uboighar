 
    <x-backend.layout.master>
        @slot('title')
        Request Book Update
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Request Book Update
           <a href="{{ route('sellbooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Request Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('requestbooks.update',['requestbook'=>$requestbookedit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                    <x-frontend.form.input name="booktitle" text="Book Tile" type="text" :value="old('booktitle', $requestbookedit->booktitle)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $requestbookedit->bookauthor)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition', $requestbookedit->bookedition)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity', $requestbookedit->bookquantity)" />
               </div>
              
                <div class="col-md-6">
                    <x-frontend.form.input name="mobile" text="Mobile" type="tel" :value="old('mobile', $requestbookedit->mobile)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="address" text="Address" type="text" :value="old('address', $requestbookedit->address)" />
               </div>
               <div class="col-md-12">
                <img src="{{asset('/storage/requestbooks/'.$requestbookedit->bookimage)}}" alt="" style="width:200px;height:100px">
              </div>
                  
               <div class="form-check">
                <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" {{ $requestbookedit->status ? 'checked' : '' }} >
                <label class="form-check-label" for="isActiveInput">
                    Is Active
                </label>
            </div>
                   
                  <div class="col-md-12">
                    <x-frontend.form.input name="bookimage" text="Book Image" type="file"/>
                  </div>
                  
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('sellbooks.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 