
<x-backend.layout.master>
    @slot('title')
    Banner Update
    @endslot
<div class="card mb-4 ">

    <div class="card-header "style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Update Banner
       <a href="{{ route('banners.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
    </div>

<div class="mx-auto card w-75 rounded mb-5 mt-5">
<x-frontend.form.card_header text="Banner Update" class="text-white rounded"/>
<div class="card-body">
 <form class="row g-3" role="form" action="{{ route('banners.update',['banner'=>$banner->id]) }}" method="post" enctype="multipart/form-data">

     @csrf
     @method('patch')


         <x-backend.alertmessage.alertmessage type="success"/>

        <div class="col-md-4">
            <label for="Bnnner">UPDATE TYPE</label>
            <select class="form-control" name="option" id="option">

              <option value="sell book"{{ old('option',$banner->option)=='sell book' ? 'selected' : ''  }}>sell book</option>
              <option value="Donate book"{{ old('option',$banner->option)=='Donate book' ? 'selected' : ''  }}>Donate book</option>
              <option value="Request book"{{ old('option',$banner->option)=='Request book' ? 'selected' : ''  }}>Request book</option>
              <option value="Earn point"{{ old('option',$banner->option)=='Earn point' ? 'selected' : ''  }}>Earn point</option>
              <option value="About us"{{ old('option',$banner->option)=='About us' ? 'selected' : ''  }}>About us</option>
              <option value="Contact us"{{ old('option',$banner->option)=='Contact us' ? 'selected' : ''  }}>Contact us</option>
              <option value="Faq"{{ old('option',$banner->option)=='Faq' ? 'selected' : ''  }}>Faq</option>
              <option value="Events"{{ old('option',$banner->option)=='Events' ? 'selected' : ''  }}>Events</option>
            </select>
        </div>

        <img src="{{asset('/storage/banner/'.$banner->image)}}" alt="" class="mx-auto img-fluid"  >
        <div class="col-md-4">
            <input type="checkbox" id="is_active" name="is_active" value="1"{{ $banner->is_active ? 'checked' : '' }}>
            <label for=""> Active Status</label><br>
        </div>
        <div class="col-md-12">
         <x-frontend.form.input name="image" text="Bnnner Image" type="file" />
        </div>

         <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Update</button>

     </form>
</div>

</div>

</div>
</x-backend.layout.master>


