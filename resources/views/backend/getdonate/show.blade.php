 
    <x-backend.layout.master>
        @slot('title')
        Sell Book Details
        @endslot
    <div class="card mb-4 mt-4">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Sell Book Details
           <a href="{{ route('sellbooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b> Sell Book Details</b></h4>
            </div>
            <td><img src="{{asset('/storage/sellbooks/'.$sellbookshow->bookimage)}}" alt="" style="width:400px;height:200px" class="mx-auto m-2"></td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Book Title </th>
                  <td>{{ $sellbookshow->booktitle }}</td>
                 
                </tr>
                <tr>
                  <th> Book Author</th>
                  <td>{{ $sellbookshow->bookauthor }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $sellbookshow->bookedition }}</td>
                 
                </tr>
                <tr>
                  <th> Book Price</th>
                  <td>{{ $sellbookshow->price }}</td>
                 
                </tr>
                <tr>
                  <th> Mobile</th>
                  <td>{{ $sellbookshow->mobile }}</td>
                 
                </tr>
                
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="cart-footer bg-info">
          
          </div>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 