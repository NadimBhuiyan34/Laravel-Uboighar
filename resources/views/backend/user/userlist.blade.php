<x-backend.layout.master>
    @slot('title')
     User List
    @endslot
<div class="card mb-4">
<div class="card-header " style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        UserList
        <a href="{{ route('user.register') }}"> <button class="btn btn-outline-info btn-sm text-black">Add New User</button></a>

    </div>
   
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                     
                </tr>
            </thead>
           
            <tbody>
                @foreach ($users as $user)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->roles->role}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                     
                     <td>
                        <div class="d-flex">
                        <x-backend.buttonlink.viewlink action="{{ route('users.show',['user'=>$user->id ])}}"/>
                        <x-backend.buttonlink.editlink action="{{ route('users.edit',['user'=>$user->id ])}}"/>
               
                        <x-backend.buttonlink.deletelink action="{{ route('users.destroy',['user'=>$user->id ])}}"/>
                        </div>
                    </td>
                         {{-- <a href="{{ route('sellbook.show',[
                            'sellbook'=>$sellbooklist->id
                         ]) }}">
                            <i class="fa-solid fa-pencil text-success"style="margin-left:20px"></i>
                        </a> --}}
                     {{-- <form action="{{ route('sellbook.destroy',['sellbook'=>$sellbooklist->id] )}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn text-danger d-inline" onclick="confirm('Are you Sure?')"><i class="fa-solid fa-trash-can"></i></button>
                       

                     </form> --}}
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
 
</x-backend.layout.master>