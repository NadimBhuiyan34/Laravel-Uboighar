 
    <x-backend.layout.master>
        @slot('title')
       Update earnpoint_order
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Update earnpoint_order
           <a href="{{ route('earnorders.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Update Earnpoint Order" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('earnorders.update',['earnorder'=>$earnorder->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                <x-frontend.form.input name="name"  text="User Name" type="text" :value="old('name', $earnorder->users->name)" visiable="disabled"/>
               </div>
                <div class="col-md-6">
                <x-frontend.form.input name="booktitle" text="Book title" :value="old('booktitle', $earnorder->requestbooks->booktitle)" type="text"  visiable="disabled"/>
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="delivery_date" text="Delivery Date" :value="old('delivery_date', $earnorder->delivery_date)" type="date"  />
               </div>
               <div class="col-12">
                <x-frontend.forms.textarea name="message" type="text" id="message" :value="old('message',$earnorder->message)"/>
            </div>
                
                
              
               <div class="form-check">
                    <input name="status" class="form-check-input" type="checkbox" value="1" id="isActiveInput" {{ $earnorder->status ? 'checked' : '' }} >
                    <label class="form-check-label" for="isActiveInput">
                        Is Active
                    </label>
                </div>
               
                   
                  
                  
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('earnorders.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                     
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 