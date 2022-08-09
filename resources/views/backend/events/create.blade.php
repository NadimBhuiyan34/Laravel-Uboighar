 
    <x-backend.layout.master>
        @slot('title')
        Event Add
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Event Add
           <a href="{{ route('events.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Add New events" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                <div class="col-md-12">
                <x-frontend.form.input name="title" text=" Title" type="text" :value="old('title')"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="image" text="Image" type="file" />
               </div>
                <div class="col-md-12">
                <x-frontend.form.input name="cheif_guest" text="Cheif Guest Of Events" type="text" :value="old('cheif_guest')"/>
               </div>
                <div class="col-md-12">
                <x-frontend.form.input name="details" text="Details" type="textarea" :value="old('details')"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="venue" text="Venue" type="text" :value="old('venue')"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="date" text="Date" type="Date" :value="old('date')"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="time" text="Time" type="time" :value="old('time')"/>
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
 
 
 