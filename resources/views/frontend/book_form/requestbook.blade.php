<x-frontend.layout.master>
    <x-slot name="title">RequestBook_Form</x-slot>

    <div class="container d-flex justify-content-center">
        @if(isset($banner->image))
        <div class="card shadow">
            <img src="{{ asset('/storage/banner/' . $banner->image) }}" alt="Banner" class="w-100 rounded">
        </div>
        @endif
    </div>
<section class="gray-bg">
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Request Book</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>

                    
                    
                    <x-frontend.modal.modal id="requestbook" name="See Video" title="Requestbook Video" url="https://www.youtube.com/embed/tgbNymZ7vqY"/>
                     
            </div>
        </div>
    </div>
</div>


<div class="card w-75 mx-auto mb-5 rounded">
    <x-frontend.form.card_header text="Request your book" class="text-white rounded"/>
    <div class="card-body">
        <form class="row g-3" role="form" action="{{ route('requestbooks.store') }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('post')
                             
                <x-backend.alertmessage.alertmessage type="success"/>
                <div class="col-md-6">
                    <x-frontend.form.input name="booktitle" text="Book Title" type="text" :value="old('booktitle')"/>
                </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor')"/>
                </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition')"/>
                </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity')"/>
                </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="mobile" text="Mobile" type="tel"  :value="old('mobile')"/>
                </div>
                <div class="col-md-6">
                    <x-frontend.form.input name="address" text="Address*" type="text" :value="old('address')"/>
                </div>
                <div class="col-md-12">
                    <x-frontend.form.input name="bookimage" text="Book Image" type="file" />
                </div>
                  <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
            </form>
    </div>

</div>
</x-frontend.layout.master>

</section>




