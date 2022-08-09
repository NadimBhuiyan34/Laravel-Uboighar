 
    <x-backend.layout.master>
        @slot('title')
        Category Add
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
           Category Add
           <a href="{{ route('categories.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Add New Category" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                <x-frontend.form.input name="title" text="Category Title" type="text" :value="old('title')"/>
               </div>
                <div class="col-md-6">
                <x-frontend.form.input name="description" text="Category Description" type="textarea" :value="old('description')"/>
               </div>
                {{-- <div class="col-md-12">
                <x-frontend.form.input name="route" text="Route Link" type="text" :value="old('route')"/>
               </div> --}}
              
               <div class="form-check">
                <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" checked>
                <label class="form-check-label" for="isActiveInput">
                    Is Active
                </label>
            </div>
               
                   
                  
                  
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Submit</strong></button>
                     
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 