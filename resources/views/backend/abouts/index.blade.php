<x-backend.layout.master>
  @slot('title')
  About Us
  @endslot
  
  <div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
    <i class="fas fa-table me-1"></i>
    About Us
    <a href="{{ route('abouts.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New contact</button></a>

      
    </div>   
      <div class="tm-product-table-container">

          <x-backend.alerts.message type="success" :message="session('message')"/> 

          <table class="table tm-table-small tm-product-table" id="datatablesSimple">
                
            <thead>
              <tr>
                  <th class="tm-product-name">SL</th>
                  <th class="tm-product-name">Title</th>
                  <th class="tm-product-name">Description</th>
                  <th class="tm-product-name">Image</th>
                  <th class="tm-product-name">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
              <tr>
                <td class="tm-product-name">{{$loop->iteration}}</td>
                <td class="tm-product-name">{{$about->title}}</td>
                <td class="tm-product-name">{{$about->description}}</td>
                <td><img src="{{asset('/storage/aboutus/'.$about->image)}}" alt="" style="width:50px;height:50px"></td>
                <td>
                <div class="d-flex ">
                            
                            <x-backend.buttonlink.editlink action="{{ route('abouts.edit', ['about'=>$about->id])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('abouts.destroy',['about'=>$about->id]) }}"/>
                </div>
               </td>
                  
                    
              </tr>
              @endforeach
            </tbody>
          </table>
        
            <!-- table container -->
       
      </div> 
  </div> 
     
</x-backend.layout.master>    