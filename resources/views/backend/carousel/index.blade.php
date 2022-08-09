<x-backend.layout.master>
    @slot('title')
    Carousel
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Carousel 
    @endslot
    <div class="card-header"style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
       Carousel
       
       <a href="{{ route('carousels.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Carousel</button></a>
    </div>
  

    <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Carousel Title</th>
                    <th>Carousel Caption</th>
                    <th>Carousel Image</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach ($carousels as $carousel)
                    
                
                <tr>
                    <td>{{ $carousel->carouseltitle }}</td>
                    <td>{{ $carousel->carouselcaption }}</td>
                    <td align="center"><img src="{{asset('/storage/carousel/'.$carousel->carouselimage)}}" alt="" style="width:200px;height:100px;margin:auto"></td>
                    <td>{{ $carousel->created_at }}</td>
                    <td>
                        <div class="d-flex">
                             
                            <x-backend.buttonlink.viewlink action="{{ route('carousels.show',['carousel'=>$carousel->id ])}}"/>
                            <x-backend.buttonlink.editlink action="{{ route('carousels.edit',['carousel'=>$carousel->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('carousels.destroy',['carousel'=>$carousel->id ])}}"/>
                        </div>
                 
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
 
</x-backend.layout.master>