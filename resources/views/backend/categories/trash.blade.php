<x-backend.layout.master>
    @slot('title')
    Category
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Category Trash List
        <a href="{{ route('categories.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
     
      
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
                    <form method="post" action="{{ route('categories.restore', ['id' => $category->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>
                    
                    <form method="post" action="{{ route('categories.delete', ['id' => $category->id]) }}"  style="display:inline">
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