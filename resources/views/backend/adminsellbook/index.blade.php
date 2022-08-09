<x-backend.layout.master>
    @push('switch')
<link href="{{ asset('ui/backend') }}/css/switch.css" rel="stylesheet" />
@endpush
    @slot('title')
    Sellbook
    @endslot
<div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Sell Book
       <a href="{{ route('sellbooks.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Sellbook</button></a>
       <a href="{{ route('sellbooks.trash') }}"> <button class="btn btn-outline-info btn-sm text-black">Trash</button></a>

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
                    <th>Status</th>
                        <th>Approve</th>
                        <th>Cancled</th>
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
                    <td>{{ $sellbook->status }}</td>
                    <td>
                        <a
                            class="btn  d-flex btn btn-outline-success btn-sm "href="{{ route('sellapproved', $sellbook->id) }}"><i
                                class="fa-regular fa-circle-check"></i></a>
                    </td>

                    <td>
                     {{-- <a
                            class="btn  d-flex btn btn-outline-danger btn-sm"href="{{ route('sellcancle', $sellbook->id) }}"><i
                                class="fa-solid fa-xmark"></i> --}}
                                   {{-- <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                  </label> --}}
                                  <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                                  </div>
                            
                     </a>
                    </td>
                    <td>
                        <div class="d-flex ">
                            <x-backend.buttonlink.viewlink  action="{{ route('sellbooks.show',['sellbook'=>$sellbook->id ])}}"/>
                            <x-backend.buttonlink.editlink action="{{ route('sellbooks.edit',['sellbook'=>$sellbook->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('sellbooks.destroy',['sellbook'=>$sellbook->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
 
</x-backend.layout.master>
