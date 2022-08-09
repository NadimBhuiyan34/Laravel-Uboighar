<x-backend.layout.master>
    @slot('title')
    Donatebooks
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Donate-books Trash List
        <a href="{{ route('donatebooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>


    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
           <thead>
           <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Quantity</th>
                    <th>Book Image</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($donatebooks as $donatebook)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $donatebook->fullname }}</td>
                    <td>{{ $donatebook->email }}</td>
                    <td>{{ $donatebook->address }}</td>
                    <td>{{ $donatebook->mobile }}</td>
                    <td>{{ $donatebook->booktitle }}</td>
                    <td>{{ $donatebook->bookauthor }}</td>
                    <td>{{ $donatebook->bookedition }}</td>
                    <td>{{ $donatebook->bookquantity }}</td>
                    <td><img src="{{asset('/storage/donatebook/'.$donatebook->bookimage)}}" alt="" style="width:50px;height:50px"></td>

                    <td>
                    <div class="d-flex">
                    <form method="post" action="{{ route('donatebooks.restore', ['id' => $donatebook->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>

                    <form method="post" action="{{ route('donatebooks.delete', ['id' => $donatebook->id]) }}"  style="display:inline">
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
