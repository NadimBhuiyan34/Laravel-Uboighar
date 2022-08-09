
<x-backend.layout.master>
    @slot('title')
    Banner
    @endslot
<div class="card mb-4 mt-4 ">

    <div class="card-header ">
        <i class="fas fa-table me-1"></i>
        Create Banner
       <a href="{{ route('banners.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
    </div>

<div class="mx-auto card w-75 rounded mb-5 mt-5">
<x-frontend.form.card_header text="Banners" class="text-white rounded"/>
<div class="card-body">
 <form class="row g-3" role="form" action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">

     @csrf
        <x-backend.alertmessage.alertmessage type="success"/> <br><br>
        <div class="col-md-6">
            <label for="Bnnner">Choose a type:</label>
    <select class="form-select" aria-label="Default select example" name="option" id="option">
          <option value="sell book">Choose a Type</option>
          <option value="sell book">Sell Book</option>
          <option value="Donate book">Donate Book</option>
          <option value="Request book">Request Book</option>
          <option value="Earn point">Earn Point</option>
          <option value="About us">About Us</option>
          <option value="Contact us">Contact Us</option>
          <option value="Faq">Faq</option>
          <option value="Events">Events</option>
    </select>




    {{-- <label for="Bnnner">Choose a type:</label>
        <select name="option" id="option">
         <option >select on</option>
          <option value="sell book">sell book</option>
          <option value="Donate book">Donate book</option>
          <option value="Request book">Request book</option>
          <option value="Earn point">Earn point</option>
          <option value="About us">About us</option>
          <option value="Contact us">Contact us</option>
          <option value="Faq">Faq</option>
          <option value="Events">Events</option>
        </select> --}}
    </div>
        <div class="col-md-6">
         <x-frontend.form.input name="image" text="Banner Image" type="file" />
        </div>

        <div class="col-md-12">
        <input type="checkbox" id="is_active" name="is_active" value="1">
            <label for="is_active"> Active Status</label><br>
        </div>
         <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>

     </form>
</div>

</div>

</div>
</x-backend.layout.master>


