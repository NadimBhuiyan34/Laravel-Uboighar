
    <x-backend.layout.master>
        @slot('title')
        Requested Book Details
        @endslot
    <div class="card mb-4">
       
        <div class="card-header " style="background-color: #defffe">
            <i class="fas fa-table me-1"></i>
            Requested Book Details
           <a href="{{ route('donatebooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
     
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm bg-primary text-white">
             <h4> <b>  Requested Book Details</b></h4>
            </div>
            <td><img src="{{asset('/storage/donatebook/'.$donatebookshow->bookimage)}}" alt="No image submitted" style="width:400px;height:200px" class="mx-auto m-2"></td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Doner Name </th>
                  <td>{{ $donatebookshow->fullname}}</td>
                 
                </tr>
                <tr>
                  <th> Book Title </th>
                  <td>{{ $donatebookshow->booktitle}}</td>
                 
                </tr>
                <tr>
                  <th> Book Author</th>
                  <td>{{ $donatebookshow->bookauthor }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $donatebookshow->bookedition }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $donatebookshow->bookquntity}}</td>
                 
                </tr>
                <tr>
                  <th> Mobile</th>
                  <td>{{ $donatebookshow->mobile }}</td>
                 
                </tr>
                <tr>
                  <th>Address</th>
                  <td>{{ $donatebookshow->address }}</td>
                 
                </tr>
                <tr>
                  <th>Created Date</th>
                  <td>{{ $donatebookshow->created_at }}</td>
                 
                </tr>
                
              </thead>
              <tbody>
              </tbody>
            </table>
            <div class="card-footer">
              <x-backend.buttonlink.editlink action="{{ route('donatebooks.edit',['donatebook'=>$donatebookshow->id ])}}"/>
            </div>
    </div>
  </div>
    </x-backend.layout.master>


