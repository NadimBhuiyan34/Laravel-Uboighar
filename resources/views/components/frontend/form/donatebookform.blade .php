


@props(['formtitle','donatebookdit'=>''])
  @if ($donatebookedit)
    
<div class="container card w-50 ">
  <form class="form-horizontal" role="form" action="{{ route('sellbook.update',['sellbook'=>$sellbookedit->id]) }}" method="post" enctype="multipart/form-data">
     @csrf
     @method('patch')
      <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>{{ $formtitle }}</div>
      <br>
     <x-backend.alertmessage.alertmessage type="success"/>
   
      <br>
      <br>

       <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Title</label>
           
              <input type="text" id="book title"   class="form-control @error('booktitle'){{ 'is-invalid' }} @enderror " autofocus require name="booktitle"  value="{{ old('booktitle',$sellbookedit->booktitle
             )}}
             ">
          </div>
          @error('booktitle')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div> 
    

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Author</label>
              <input type="text" id="book author"   class="form-control  @error('bookauthor'){{ 'is-invalid' }} @enderror" autofocus require name="bookauthor"  value="{{ old('bookauthor',$sellbookedit->bookauthor) }}">
          </div>
          @error('bookauthor')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Edition</label>
              <input type="text" id="book edition"   class="form-control  @error('bookedition'){{ 'is-invalid' }} @enderror" autofocus require name="bookedition"  value="{{ old('bookedition',$sellbookedit->bookedition) }}">
          </div>
          @error('bookedition')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Quantity</label>
              <input type="text" id="book quality"   class="form-control  @error('bookquantity'){{ 'is-invalid' }} @enderror" autofocus require name="bookquantity"  value="{{ old('bookquantity',$sellbookedit->bookquantity) }}">
          </div>
          @error('bookquantity')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>
      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Price</label>
              <input type="text" id="book quality"  class="form-control  @error('price'){{ 'is-invalid' }} @enderror" autofocus require name="price"  value="{{ old('price',$sellbookedit->price)}}">
          </div>
          @error('price')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

    
     
      <div class="form-group">
         
          <div class="col-sm-11">
            <label for="email" class="form-label">Mobile</label>
              <input type="phoneNumber" id="phoneNumber"   class="form-control  @error('mobile'){{ 'is-invalid' }} @enderror" require name="mobile" value="{{ old('mobile',$sellbookedit->mobile) }}">
             
          </div>
          @error('mobile')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group" style="padding-left: 20px; color: gray;">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
          
          </div> 
          
           
            <button type="submit" class="btn btn-success d-flex">Update</button>
         





      </div> 
      
          
  
  </form>  <!-- /form -->
 
</div>



@else

<div class="container card w-50 ">
  <form class="form-horizontal" role="form" action="{{ route('sellbook.insert') }}" method="post" enctype="multipart/form-data">
     @csrf
      <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>{{ $formtitle }}</div>
      <br>
     <x-backend.alertmessage.alertmessage type="success"/>
   
      <br>
      <br>
       
     
       <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Title</label>
           
              <input type="text" id="book title"   class="form-control @error('booktitle'){{ 'is-invalid' }} @enderror " autofocus require name="booktitle"  value="{{ old('booktitle'
             )}}
             ">
          </div>
          @error('booktitle')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div> 
    

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Author</label>
              <input type="text" id="book author"   class="form-control  @error('bookauthor'){{ 'is-invalid' }} @enderror" autofocus require name="bookauthor"  value="{{ old('bookauthor') }}">
          </div>
          @error('bookauthor')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Edition</label>
              <input type="text" id="book edition"   class="form-control  @error('bookedition'){{ 'is-invalid' }} @enderror" autofocus require name="bookedition"  value="{{ old('bookedition') }}">
          </div>
          @error('bookedition')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Quantity</label>
              <input type="text" id="book quality"   class="form-control  @error('bookquantity'){{ 'is-invalid' }} @enderror" autofocus require name="bookquantity"  value="{{ old('bookquantity') }}">
          </div>
          @error('bookquantity')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>
      <div class="form-group">
          <div class="col-sm-11">
            <label for="email" class="form-label">Book Price</label>
              <input type="text" id="book quality"  class="form-control  @error('price'){{ 'is-invalid' }} @enderror" autofocus require name="price"  value="{{ old('price',)}}">
          </div>
          @error('price')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

    
     
      <div class="form-group">
         
          <div class="col-sm-11">
            <label for="email" class="form-label">Mobile</label>
              <input type="phoneNumber" id="phoneNumber"   class="form-control  @error('mobile'){{ 'is-invalid' }} @enderror" require name="mobile" value="{{ old('mobile') }}">
             
          </div>
          @error('mobile')
          <p class="text-danger ml-3"> {{ $message }}</p>
        @enderror
      </div>

      <div class="form-group" style="padding-left: 20px; color: gray;">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
          
          </div>

      </div> 
    
          
  
  </form>  <!-- /form -->
</div>
  @endif
   