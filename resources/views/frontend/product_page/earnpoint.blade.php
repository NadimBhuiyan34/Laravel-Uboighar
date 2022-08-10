 
 <x-frontend.layout.master>
<!-- Slider Start -->
@slot('title')
EarnPoint
@endslot

	<div class="container d-flex justify-content-center">
        @if(isset($banner->image))
        <div class="card shadow">
            <img src="{{ asset('/storage/banner/' . $banner->image) }}" alt="Banner" class="w-100 rounded">
        </div>
        @endif
    </div>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Earn Point</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>


                     <x-frontend.modal.modal id="requestbook" name="See Vedio" title="Requestbook Vedio" url="https://www.youtube.com/embed/tgbNymZ7vqY"/>
            </div>
        </div>
    </div>
</div>


<div class="container mt-3">

  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Requested Book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Procesing Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">Confirm Order</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>

<div class="container mt-3">
 
  <x-backend.alertmessage.alertmessage type="success"/>
 
  <table class="table table-bordered">
    <thead>
      <tr>
                    <th>SL No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Book Quantity</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Order Processing</th>
                    {{-- <th>Book Image</th> --}}
                    <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($requestbooks as $requestbook)
     
        
      
      <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $requestbook->booktitle }}</td>
                    <td>{{ $requestbook->bookauthor }}</td>
                    <td>{{ $requestbook->bookedition }}</td>
                    <td>{{ $requestbook->bookquantity}}</td>
                    <td>{{ $requestbook->address }}</td>
                    <td>{{ $requestbook->mobile }}</td>
                    <td>{{ $requestbook->status }}</td>
                    {{-- <td>{{ $requestbook->earnpoint->message }}</td> --}}
                    {{-- <td><img src="{{asset('/storage/requestbooks/'.$requestbook->bookimage)}}" alt="no image" style="width:50px;height:50px"></td> --}}
 
                    {{-- <td><button type="button" class="btn btn-outline-success btn-sm">Accept</button></td> --}}
                    <td>
                      <div class="d-flex">
                        <button type="button" class="btn  btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#detailsModal{{ $requestbook->id }}">
                          Details
                        </button>
                        <button type="button" class="btn  btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#myModal{{ $requestbook->id }}">
                          Accept
                        </button>
                       
                      </div>
                  </td>
                     
 
                  
 
      </tr>
      <div class="modal" id="myModal{{ $requestbook->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Order Accept </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              <form class="row g-3" role="form" action="{{ route('earnpoints.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('post')
                    
                    <br>
                    <x-backend.alertmessage.alertmessage type="success"/>
                    
                
                    <div class="col-md-12">
                        <x-frontend.form.input name="delivery_date" text="Delivery Date" type="date" :value="old('delivery_date')"/>
                    </div>
                    <div class="col-12">
                      <x-frontend.forms.textarea name="message" type="Message" id="message" :value="old('message')"/>
                    </div>
                    
                    <x-frontend.form.input name="book_id" text="" type="hidden" value="{{ $requestbook->id }}"/>
                    <x-frontend.form.input name="user_id" text="" type="hidden" value="{{ auth()->user()->id}}"/>

                    <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
                     
        
                    </div>
                </form>  
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
     

{{-- details modal --}}
<div class="modal" id="detailsModal{{ $requestbook->id }}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Requested Book Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body d-flex">
        <div>
          <img src="{{asset('/storage/requestbooks/'.$requestbook->bookimage)}}" alt="no image" style="width:150px;height:250px">
        </div>
       
        {{-- <div class="ml-3"> --}}
          <ul class="list-group ml-3">
           
            <li class="list-group-item"><strong>Book Title:</strong>{{ $requestbook->booktitle }}</li>
                 <li class="list-group-item"><strong>Book Author:</strong>{{ $requestbook->bookauthor }}</li>
            <li class="list-group-item"><strong>Book Edition:</strong>{{ $requestbook->bookedition }}</li>
            <li class="list-group-item"><strong>Book Quantity:</strong>{{ $requestbook->bookquantity }}</li>
            <li class="list-group-item"><strong>Mobile:</strong>{{ $requestbook->mobile }}</li>
            <li class="list-group-item"><strong>Address:</strong>{{ $requestbook->address }}</li>
            
          </ul>
        </div>

      {{-- </div> --}}

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


      @endforeach
    </tbody>
  </table>
</div>
    </div>



    <div id="menu1" class="container tab-pane fade"><br>
       
      <div class="container mt-3">
        {{-- <x-backend.alertmessage.alertmessage type="success"/> --}}
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL No</th>
                          <th>Book Title</th>
                          <th>Book Author</th>
                          <th>Book Edition</th>
                          <th>Book Quantity</th>
                          <th>Order Address</th>
                          <th>Mobile</th>
                          <th>Delivery Date</th>
                          <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($earn_orders as $earn_order)
             @if ($earn_order->confirm_id=='')
               
             
             
       
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $earn_order->requestbooks->booktitle }}</td>
              <td>{{ $earn_order->requestbooks->bookauthor }}</td>
              <td>{{ $earn_order->requestbooks->bookedition }}</td>
              <td>{{ $earn_order->requestbooks->bookquantity}}</td>
              <td>{{ $earn_order->requestbooks->address }}</td>
              <td>{{ $earn_order->requestbooks->mobile }}</td>
              <td>{{ $earn_order->delivery_date }}</td>
              
              <td>
                <div class="d-flex">
                  <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirm{{  $earn_order->id }}">
                    Confirm 
                  </button>
                  <x-backend.buttonlink.cancellink  action="{{ route('earnpoints.destroy',['earnpoint'=> $earn_order->id  ])}}"/>
                </div>
            </td>
               
</tr>
<div class="modal" id="confirm{{ $earn_order->id }}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Confirm </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="row g-3" role="form" action="{{ route('earnpoints.update',['earnpoint'=>$earn_order->id]) }}" method="post" enctype="multipart/form-data">

          @csrf
          @method('patch')
              
              <br>
              {{-- <x-backend.alertmessage.alertmessage type="success"/> --}}
              
          
              <div class="col-md-12">
                  <x-frontend.form.input name="delivery_date" text="Delivery Date" type="date" :value="old('delivery_date')"/>
              </div>
          
              <div class="col-md-12">
                  <x-frontend.form.input name="delivery_image" text="Delivery Image" type="file" :value="old('delivery_image')"/>
              </div>
              <div class="col-md-12">
                  <x-frontend.form.input name="confirm_id" text="Order Id" type="text" :value="old('confirm_id')"/>
              </div>
              
              
              {{-- <x-frontend.form.input name="book_id" text="" type="hidden" value="{{ $requestbook->id }}"/>
              <x-frontend.form.input name="user_id" text="" type="hidden" value="{{ auth()->user()->id}}"/> --}}

              <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
               
  
              </div>
          </form>  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

@endif
          
            @endforeach
          </tbody>
        </table>
      </div>
    </div>





    <div id="menu2" class="container tab-pane fade"><br>
      <div class="container mt-3">
        {{-- <x-backend.alertmessage.alertmessage type="success"/> --}}
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL No</th>
                          <th>Book Title</th>
                          <th>Book Author</th>
                          <th>Book Edition</th>
                          <th>Book Quantity</th>
                          <th>Order Address</th>
                          <th>Mobile</th>
                          <th>Delivery Date</th>
                          <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($confirm_orders as $confirm_order)
             @if ($confirm_order->user_id==auth()->user()->id)
               
             
             
       
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $confirm_order->requestbooks->booktitle }}</td>
              <td>{{ $confirm_order->requestbooks->bookauthor }}</td>
              <td>{{ $confirm_order->requestbooks->bookedition }}</td>
              <td>{{ $confirm_order->requestbooks->bookquantity}}</td>
              <td>{{ $confirm_order->requestbooks->address }}</td>
              <td>{{ $confirm_order->requestbooks->mobile }}</td>
              <td>{{ $confirm_order->delivery_date }}</td>
              
              <td>
                <div class="d-flex">
                  {{-- <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirm{{  $earn_order->id }}">
                    Confirm 
                  </button> --}}
                  <x-backend.buttonlink.cancellink  action="{{ route('earnpoints.destroy',['earnpoint'=> $earn_order->id  ])}}"/>
                </div>
            </td>
               
</tr>
<div class="modal" id="confirm{{ $earn_order->id }}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Confirm </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="row g-3" role="form" action="{{ route('earnpoints.update',['earnpoint'=>$earn_order->id]) }}" method="post" enctype="multipart/form-data">

          @csrf
          @method('patch')
              
              <br>
              {{-- <x-backend.alertmessage.alertmessage type="success"/> --}}
              
          
              <div class="col-md-12">
                  <x-frontend.form.input name="delivery_date" text="Delivery Date" type="date" :value="old('delivery_date')"/>
              </div>
          
              <div class="col-md-12">
                  <x-frontend.form.input name="delivery_image" text="Delivery Image" type="file" :value="old('delivery_image')"/>
              </div>
              <div class="col-md-12">
                  <x-frontend.form.input name="confirm_id" text="Order Id" type="text" :value="old('confirm_id')"/>
              </div>
              
              
              {{-- <x-frontend.form.input name="book_id" text="" type="hidden" value="{{ $requestbook->id }}"/>
              <x-frontend.form.input name="user_id" text="" type="hidden" value="{{ auth()->user()->id}}"/> --}}

              <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
               
  
              </div>
          </form>  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

@endif
          
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</div>
@push('popover')
<script>
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })
  </script>
@endpush
</x-frontend.layout.master>








