
<x-backend.layout.master title="Donatebook" bottomheader="Update Donate Book">
    
<div class="container card w-50">
    <form class="form-horizontal" role="form" action="{{ route('contacts.update',['contacts'=>$contact->id]) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('patch')
        <h2 class="text-center">Donate Book</h2>
            <br> <br><br>
    
            {{-- use components --}}
                <x-frontend.form.input name="fullname" text="Full Name" type="text" :value="old('fullname', $contacts->fullname)" />
                <x-frontend.form.input name="email" text="Email" type="text" :value="old('email', $contacts->email)" />
                <x-frontend.form.input name="message" text="Message" type="text" :value="old('message', $contacts->message)"/>
                <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile', $contacts->mobile)"/>
            
              <div class="form-group" style="padding-left: 20px; color: gray;">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>       
        
        </form>  <!-- /form -->
    </div>
 
</x-backend.layout.master>








 