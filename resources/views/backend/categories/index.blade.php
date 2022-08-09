<x-backend.layout.master>
    @slot('title')
    Sellbook
    @endslot
<div class="card mb-4 ">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Book Category
        <a href="{{ route('categories.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Category</button></a>
       <a class="btn btn-outline-info btn-sm text-black" href="{{route('categories.trash') }}">Trash</a>
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
        <thead>
                <tr>
                    <th>SL No</th>
                    <th>Category Title</th>
                    <th>Category description</th>
                    <th>Route link</th>
                    <th>Is_active</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($categories as $category)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->title}}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->route }}</td>
                    <td>{{ $category->is_active ? 'Active' : 'In Active'  }}</td>
                    <td>
                        <div class="d-flex">
       
                            <x-backend.buttonlink.editlink action="{{ route('categories.edit', ['category' => $category->id]) }}"/>
                           
                            <form method="post" action="{{ route('categories.destroy', ['category' => $category->id]) }}" style="display:inline">
                                @csrf
                                @method('delete')
                                <x-backend.buttonlink.deletelink color="danger" onclick="return confirm('Are you sure want to delete?')" text="Delete" />
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