 
    <x-backend.layout.master>
        @slot('title')
       Product Details
        @endslot
    <div class="card mb-4">
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Product Details
           <a href="{{ route('products.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm bg-primary text-white">
             <h4> <b> Product Details</b></h4>
            </div>
            <td><img src="{{asset('/storage/products/'.$productshow->bookimage)}}" alt="" style="width:400px;height:200px" class="mx-auto m-2"></td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Book Title </th>
                  <td>{{ $productshow->booktitle }}</td>
                 
                </tr>
                <tr>
                  <th> Book Author</th>
                  <td>{{ $productshow->bookauthor }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $productshow->bookedition }}</td>
                 
                </tr>
                <tr>
                  <th> Book Price</th>
                  <td>{{ $productshow->price }}</td>
                 
                </tr>
                 
                
                
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="card-footer">
            <x-backend.buttonlink.editlink action="{{ route('products.edit',['product'=>$productshow->id ])}}"/>
          </div>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 