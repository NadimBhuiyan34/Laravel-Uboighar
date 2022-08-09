 
    <x-backend.layout.master>
        @slot('title')
        Event Update
        @endslot
    <div class="card mb-4" >
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Event Update
           <a href="{{ route('events.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
           
<div class="mx-auto card w-75 rounded mb-5 mt-5">
    <x-frontend.form.card_header text="Event Update" class="text-white rounded"/>
    <div class="card-body">
     <form class="row g-3" role="form" action="{{ route('events.update',['event'=>$event->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>

                 <x-backend.alertmessage.alertmessage type="success"/> 
                 <div class="col-md-12">
                <x-frontend.form.input name="title" text="Event Title" type="text" :value="old('title', $event->title)"/>
               </div>
               <div class="col-md-12">
                <img src="{{asset('/storage/events/'.$event->image)}}" alt="" style="width:200px;height:100px">
               </div>
               <div class="col-md-12">
                    <x-frontend.form.input name="image" text="Event Image" type="file"/>
                  </div>
                <div class="col-md-12">
                <x-frontend.form.input name="cheif_guest" text="Cheif Guest Of Events" type="text" :value="old('cheif_guest',$event->cheif_guest)"/>
               </div>
                <div class="col-md-12">
                <x-frontend.form.input name="details" text="Details" type="textarea" :value="old('details',$event->details)"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="venue" text="Venue" type="text" :value="old('venue',$event->venue)"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="date" text="Date" type="Date" :value="old('date',$event->date)"/>
               </div>
               <div class="col-md-12">
                <x-frontend.form.input name="time" text="Time" type="time" :value="old('time',$event->time)"/>
               </div>
              
                
                
    
                  
            <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('events.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                </div>
            </div> 
        </form> 
         
    </div>
</div>
</div>
    </x-backend.layout.master>
 
 
 