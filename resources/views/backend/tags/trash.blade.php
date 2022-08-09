<x-backend.layout.master>
    @slot('title')
    Tag
    @endslot
<div class="card mb-4 mt-3">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Tag Trash List
        <a href="{{ route('tags.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
     
      
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
                    <div class="d-flex">
                    <form method="post" action="{{ route('tags.restore', ['id' => $tag->id]) }}"  style="display:inline">
                                @csrf
                                @method('patch')

                                <x-backend.buttonlink.restorelink color="warning" onclick="return confirm('Are you sure want to restore?')" text="Restore" />
                    </form>
                    
                    <form method="post" action="{{ route('tags.delete', ['id' => $tag->id]) }}"  style="display:inline">
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
