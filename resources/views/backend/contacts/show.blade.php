<x-backend.layout.master>
        @slot('title')
        Contact Us
        @endslot
    <div class="card mb-4">
        @slot('bottomheader')
       Contact Details
        @endslot
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Contact Details
           <a href="{{ route('contacts.create') }}"> <button class="btn btn-sm btn-info">Edit</button></a>
        </div>
      
        <div class="card w-50 mx-auto mt-4">
            <div class="card-header text-center">
              <b> Contact Details</b>
            </div>
            
            <address class="m-5 mx-auto">
              Contact Name :{{ $contact->fullname}} <br>
              <!-- Contact Subject: {{ $requestcontactshow->contactauthor }} <br> -->
              Contact Email: {{ $contact->email }} <br>
              Mobile: {{ $contact->mobile }} <br>
              Contact Message: {{ $contact->message }} <br>
            </address>
          </div>
    </div>
     
    </x-backend.layout.master>