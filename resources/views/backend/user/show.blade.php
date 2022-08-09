 
    <x-backend.layout.master>
        @slot('title')
        User Details
        @endslot
    <div class="card mb-4">
        @slot('bottomheader')
      User Details
        @endslot
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Usert Details
           <a href="{{ route('sellbooks.index') }}"> <button class="btn btn-sm btn-info">ADD BOOK</button></a>
        </div>
      
        <div class="card w-50 mx-auto mt-4">
            <div class="card-header text-center">
              <b> User Details</b>
            </div>
            <address class="m-5">
              User Name :{{ $usershow->name }} <br>
              User Email: {{ $usershow->email }} <br>
             
            </address>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 