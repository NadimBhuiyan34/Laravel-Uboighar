<x-backend.layout.master>
    @slot('title')
    Get Donate
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Get Donate
       <a href="{{ route('sellbooks.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Request for Donate</button></a>
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
                    <th>Description</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($getdonate as $sellbook)


                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sellbook->fullname }}</td>
                    <td>{{ $sellbook->email }}</td>
                    <td>{{ $sellbook->address }}</td>
                    <td>{{ $sellbook->mobile }}</td>
                    <td>{{ $sellbook->booktitle }}</td>
                    <td>{{ $sellbook->bookauthor }}</td>
                    <td>{{ $sellbook->bookedition }}</td>
                    <td>{{ $sellbook->describe }}</td>
                    <td>
                        <div class="d-flex ">
                            <x-backend.buttonlink.viewlink  href=""/>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</x-backend.layout.master>
