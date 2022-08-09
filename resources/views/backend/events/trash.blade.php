<x-backend.layout.master>
    @slot('title')
    Event
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Event Trash List
        <a href="{{ route('events.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
     
      
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
        <thead>
                <tr>
                    <th>SL No</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Chief Guest</th>
                    <th>Details</th>
                    <th>venue</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($events as $event)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->title }}</td>
                    <td class="text-center"><img src="{{asset('/storage/events/'.$event->image)}}" alt="" style="width:50px;height:50px"></td> 
                    <td>{{ $event->cheif_guest }}</td>
                    <td>{{ $event->details }}</td>
                    <td>{{ $event->venue }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->time }}</td> 
                    <td>
                    <div class="d-flex">
                    <form method="post" action="{{ route('events.restore', ['id' => $event->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>
                    
                    <form method="post" action="{{ route('events.delete', ['id' => $event->id]) }}"  style="display:inline">
                                @csrf
                                @method('delete')
                                <x-backend.buttonlink.deletelink color="danger" onclick="return confirm('Are you sure want to delete permanently?')" text="Delete" />
                    </form>
                   </div>
                        
                
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>
 
</x-backend.layout.master>
