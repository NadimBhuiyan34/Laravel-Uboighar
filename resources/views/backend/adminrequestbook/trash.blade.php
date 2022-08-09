<x-backend.layout.master>
    @slot('title')
    Requestbooks
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Request-books Trash List
        <a href="{{ route('requestbooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
     
      
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Book Quantity</th>
                    <th>Address</th>
                    <th>Mobile</th>
                   
                </tr>
            </thead>
            
            <tbody>
            @foreach ($requestbooks as $requestbook)
                    
               
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $requestbook->booktitle }}</td>
                        <td>{{ $requestbook->bookauthor }}</td>
                        <td>{{ $requestbook->bookedition }}</td>
                        <td>{{ $requestbook->bookquantity}}</td>
                        <td>{{ $requestbook->address }}</td>
                        <td>{{ $requestbook->mobile }}</td>
                         
                    <td>  
                    <div class="d-flex">
                    <form method="post" action="{{ route('requestbooks.restore', ['id' => $requestbook->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>
                    
                    <form method="post" action="{{ route('requestbooks.delete', ['id' => $requestbook->id]) }}"  style="display:inline">
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