<x-frontend.layout.master>
    @slot('title')
        DonateBook_Request_Form
    @endslot
 

<!-- Slider Start -->
<section class="gray-bg">
 
<div class="card w-50 mx-auto mb-3 mt-3">
        <x-frontend.form.card_header text="Requested for Donated Book" class="text-white "/>
<form class="form-horizontal" role="form" action="{{route('getdonates.store')}}" method="post" enctype="multipart/form-data">
    @csrf

        <x-backend.alertmessage.alertmessage type="success"/>
        <x-frontend.form.input name="fullname" text="Full Name" type="text" :value=" old('fullname')" />
        <x-frontend.form.input name="email" text="Email" type="text" :value="old('email')"/>
        <x-frontend.form.input name="address" text="Address" type="text" :value="old('address')"/>
        <x-frontend.form.input name="mobile" text="Mobile" type="tel"  :value="old('mobile')"/>
        <x-frontend.form.input name="describe" text="Reason" type="text"  :value="old('describe')"/>
        
        <x-frontend.form.input name="booktitle" type="hidden" text="" value="{{$donet->booktitle}}"/>

          <div class="form-group" style="padding-left: 20px; color: gray;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
 
    </div>
</x-frontend.layout.master>
</section>
