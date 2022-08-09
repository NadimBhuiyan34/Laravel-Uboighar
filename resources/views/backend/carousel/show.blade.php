 
    <x-backend.layout.master>
        @slot('title')
       Carousel Details
        @endslot
    <div class="card mb-4">
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
           Carousel Details
           <a href="{{ route('carousels.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm bg-primary text-white">
             <h4> <b> Carousel Details</b></h4>
            </div>
            <td><img src="{{asset('/storage/carousel/'.$carouselshow->carouselimage)}}" alt="" style="width:400px;height:200px" class="mx-auto m-2"></td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Carousel Title </th>
                  <td>{{ $carouselshow->carouseltitle }}</td>
                 
                </tr>
                <tr>
                  <th> Book Author</th>
                  <td>{{ $carouselshow->carouselcaption }}</td>
                 
                </tr>
                 
                 
                 
                
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="card-footer">
            <x-backend.buttonlink.editlink action="{{ route('carousels.edit',['carousel'=>$carouselshow->id ])}}"/>
          </div>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 