
 <x-frontend.layout.master>
    @slot('title')
    ContactUS
    @endslot
<!-- Slider Start -->
<div class="container d-flex justify-content-center">
    @if(isset($banner->image))
    <div class="card shadow">
        <img src="{{ asset('/storage/banner/' . $banner->image) }}" alt="Banner" class="w-100 rounded">
    </div>
    @endif
</div>
<section class=""  >
<!-- /Slider end -->

  <div class="container mt-3 mb-3">
      
    
   <x-frontend.form.card_header text="Contact Us" class="text-white rounded"/>
   <div class="card-body">
    <form class="row g-3" role="form" action="{{  route('contacts.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('post')
            
            <br>
            <x-backend.alertmessage.alertmessage type="success"/>
            <div class="col-md-6">
                <x-frontend.form.input name="fullname" text="Your Name" type="text" :value="old('fullname')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="mobile" text="Phone No" type="tel" pattern="[0-9]{11}" :value="old('mobile')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="email" text="Your E-mail" type="text" :value="old('email')"/>
            </div>
            
            
           
            <div class="col-md-6">
                <x-frontend.form.input name="message" text="Leave your message " type="textarea"  :value="old('message')"/>
            </div>
           
            <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
             

            </div>
        </form>   
   </div>
    
</div>

</x-frontend.layout.master>

     