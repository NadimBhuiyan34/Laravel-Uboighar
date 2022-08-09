<x-backend.layout.master>
    @slot('title')
    Product List
    @endslot
<div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Product List
       <a href="{{ route('products.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Product</button></a>
       {{-- <a href="{{ route('products.trash') }}"> <button class="btn btn-outline-info btn-sm text-black">Trash</button></a> --}}

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
                    <th>Category</th>
                    <th>Status</th>
                    <th>Created Data</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)

{{-- @dd($product->categories) --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->booktitle }}</td>
                    <td>{{ $product->bookauthor }}</td>
                    <td>{{ $product->bookedition }}</td>
                    <td>{{ $product->bookquantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->categories->title }}</td>
                    <td>{{ $product->status?'Active':'In Active' }}</td>
                    <td>{{ $product->created_at }}</td>
                     
                    

                    
                    <td>
                        <div class="d-flex ">
                            <x-backend.buttonlink.viewlink  action="{{ route('products.show',['product'=>$product->id ])}}"/>
                            <x-backend.buttonlink.editlink action="{{ route('products.edit',['product'=>$product->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('products.destroy',['product'=>$product->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</x-backend.layout.master>
