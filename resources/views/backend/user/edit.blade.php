
<x-backend.layout.master title="user" bottomheader="Update user">

  <x-backend.alertmessage.alertmessage />
  
    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('users.update',['user'=>$useredit->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('patch')
            <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>User</div>
            <br>
           <x-backend.alertmessage.alertmessage type="success"/>
            <br>
            <br>
            <x-frontend.form.input name="name" text="User" type="text" :value="old('name', $useredit->name)" />
            <x-frontend.form.input name="email" text="Email" type="email" :value="old('email', $useredit->email)" />
              <x-frontend.form.input name="role_id" text="role_id" type="text" :value="old('user_role', $useredit->role_id)" />
    
          <button type="submit" class="btn btn-success d-flex">Update</button>
               
      
      
      
      
      
            </div> 
            
                
        
        </form>   
       
      </div>
         



 

</x-backend.layout.master>
