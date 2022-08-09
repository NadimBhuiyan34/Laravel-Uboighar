<x-backend.layout.master>
    @slot('title')
    Tags
    @endslot
<div class="card mb-4">
    <div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
       Tags
       <a href="{{ route('tags.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Product</button></a>
        <a href="{{ route('tags.trash') }}"> <button class="btn btn-outline-info btn-sm text-black">Trash</button></a>
   
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tags as $tag)


                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tag->title }}</td>
                    
                    <td>
                        <div class="d-flex ">
                            <x-backend.buttonlink.editlink action="{{ route('tags.edit', ['tag'=>$tag->id ]) }}"/>
                    
                            <x-backend.buttonlink.deletelink action="{{ route('tags.destroy',['tag'=>$tag->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

</x-backend.layout.master>
