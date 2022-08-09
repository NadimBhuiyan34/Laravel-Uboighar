<x-backend.layout.master>
        @slot('title')
        Contact Us 
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Contact Us Update
           <a href="{{ route('contacts.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Contact Us Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('contacts.update',['contact'=>$contact->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                    <x-frontend.form.input name="fullname" text="Your Name" type="text" :value="old('fullname', $contact->fullname)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="mobile" text="Phone" type="text" :value="old('mobile', $contact->mobile)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="email" text="E-mail" type="text" :value="old('email', $contact->email)" />
               </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="message" text="Leave Your Message" type="textarea" :value="old('message', $contact->message)" />
               </div>
               
                  
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('contacts.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
</x-backend.layout.master>
 
 
 

            

            
                
                 
          
      
      
      
      
 







 