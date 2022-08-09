<x-backend.layout.master>
    @slot('title')
    Earn order list
    @endslot
<div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Earn order list
       {{-- <a href="{{ route('sellbooks.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Product</button></a> --}}
       {{-- <a href="{{ route('sellbooks.trash') }}"> <button class="btn btn-outline-info btn-sm text-black">Trash</button></a> --}}

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
                    <th>User Name</th>
                    <th>Delivery Date</th>
                    <th>Message</th>
  
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($earn_orders as $earn_order)


                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $earn_order->requestbooks->booktitle }}</td>
                    <td>{{ $earn_order->requestbooks->bookauthor }}</td>
                    <td>{{ $earn_order->requestbooks->bookedition }}</td>
                    <td>{{ $earn_order->requestbooks->bookquantity }}</td>
                    <td>{{ $earn_order->users->name }}</td>
                    <td>{{ $earn_order->delivery_date }}</td>
                    <td>{{ $earn_order->message }}</td>
                    <td>{{ $earn_order->status?'Active':'InActive' }}</td>
                     
                    

                     
                    <td>
                        <div class="d-flex ">
                            <x-backend.buttonlink.viewlink  action="{{ route('earnorders.show',['earnorder'=>$earn_order->id ])}}"/>
                            <x-backend.buttonlink.editlink action="{{ route('earnorders.edit',['earnorder'=>$earn_order->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('earnorders.destroy',['earnorder'=>$earn_order->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</x-backend.layout.master>
