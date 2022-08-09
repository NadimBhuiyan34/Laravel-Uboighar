<x-backend.layout.master>
    @slot('title')
    Events
    @endslot
<div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Events
       <a href="{{ route('events.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Product</button></a>
        <a href="{{ route('events.trash') }}"> <button class="btn btn-outline-info btn-sm text-black">Trash</button></a>
   
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
                        <div class="d-flex ">
                            <x-backend.buttonlink.editlink action="{{ route('events.edit', ['event'=>$event->id ]) }}"/>
                    
                            <x-backend.buttonlink.deletelink action="{{ route('events.destroy',['event'=>$event->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</x-backend.layout.master>
