 
    <x-backend.layout.master>
        @slot('title')
        Tag
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Tag Add
           <a href="{{ route('tags.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Add New tags" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-12">
                <x-frontend.form.input name="title" text=" Title" type="text" :value="old('title')"/>
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
 
 
 