<x-backend.layout.master>
    @slot('title')
    Sellbooks
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Sell-books Trash List
        <a href="{{ route('sellbooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
     
      
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
                    <th>Price</th>
                    <th>Mobile</th>
                    <th>Book Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
              
                @foreach ($sellbooks as $sellbook)
                    
               
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sellbook->booktitle }}</td>
                        <td>{{ $sellbook->bookauthor }}</td>
                        <td>{{ $sellbook->bookedition }}</td>
                        <td>{{ $sellbook->bookquantity }}</td>
                        <td>{{ $sellbook->price }}</td>
                        <td>{{ $sellbook->mobile }}</td>
                        <td class="text-center"><img src="{{asset('/storage/sellbooks/'.$sellbook->bookimage)}}" alt="" style="width:50px;height:50px"></td>
                        <td>
                    <div class="d-flex">
                    <form method="post" action="{{ route('sellbooks.restore', ['id' => $sellbook->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>
                    
                    <form method="post" action="{{ route('sellbooks.delete', ['id' => $sellbook->id]) }}"  style="display:inline">
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