 
    <x-backend.layout.master>
        @slot('title')
        FAQ Update
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
           FAQ Update
           <a href="{{ route('faqs.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="FAQ Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('faqs.update',['faq'=>$faq->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-6">
                <x-frontend.forms.input name="name" type="text" id="name" :value="old('name',$faq->name)"/>
               </div>
                <div class="col-md-6">
                <x-frontend.forms.input name="email" type="email" id="email" :value="old('email',$faq->email)"/>
               </div>
                <div class="col-md-12">
               
                <x-frontend.forms.textarea name="comment" type="text" id="comment" :value="old('comment',$faq->comment)"/>
                </div>
                <div class="col-md-12">
               
                <x-frontend.forms.textarea name="answer" type="text" id="answer" :value="old('answer',$faq->answer)"/>
                </div>
               
               
                   
                  
                  
                
    
                  
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('faqs.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                     
                  </div>
          </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 