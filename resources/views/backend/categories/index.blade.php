<x-backend.layout.master>
    @slot('title')
    Sellbook
    @endslot
<div class="card mb-4 ">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Book Category
        {{-- <a href="{{ route('categories.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New Category</button></a> --}}
        <button type="button" class="btn  btn-outline-info btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Category
          </button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header shadow bg-primary text-white center">
          <h2 class="modal-title text-center m-auto" id="exampleModalLabel"><b>Add New Categories</b></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body shadow">
            <form class="row g-3" role="form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                 
                 <br>

                
                <div class="col-md-12">
                <x-frontend.form.input name="title" text="Category Title" type="text" :value="old('title')"/>
               </div>
                <div class="col-md-12">
                <x-frontend.form.input name="description" text="Category Description" type="textarea" :value="old('description')"/>
               </div>
            
                {{-- <div class="col-md-12">
                <x-frontend.form.input name="route" text="Route Link" type="text" :value="old('route')"/>
               </div> --}}
              
               <div class="form-check">
                <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" checked>
                <label class="form-check-label" for="isActiveInput">
                    Is Active
                </label>
            </div>
               
                   
                  
                  
                
    
                  
             {{-- <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Submit</strong></button>
                     
                  </div>
          </div>  --}}
       
         
        </div>
        <div class="modal-footer shadow">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-success m-auto w-50 shadow add_category" type="button"><strong>ADD</strong></button>
        </div>
    </form> 
      </div>
    </div>
  </div>
  <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  </script>
  <script>
    $(document).ready(function(){
        $(document).on('click','.add_category',function(e){
            e.preventDefualt();
            let title=$('#title').val();
            let description=$('#description').val();
            console.log(title+description);
        })
    })
  </script>
</x-backend.layout.master>