
<x-frontend.layout.master>
  @slot('title')
  AboutUs
  @endslot

  <div class="container d-flex justify-content-center">
    @if(isset($banner->image))
    <div class="card shadow">
        <img src="{{ asset('/storage/banner/' . $banner->image) }}" alt="Banner" class="w-100 rounded">
    </div>
    @endif
</div>
  <section class="" style="background-color: #f4f9fc;">
    <div class="container mt-5">
      <div class="row">
        <div class="col-6">
          <img src="images/about/we.png" alt="" class="img-fluid" style="height:300px ;">
          <h3 class="mt-5 text-primary">Who we are</h3>
          <p style="text-align:justify;"class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
        </div>
        <div class="col-6">
          <img src="images/about/about_right.jpg" alt="" class="img-fluid" style="height: 300px;">
          <h3 class="mt-5 text-primary  ">Our Mission and Vission</h3>
          <p style="text-align:justify;"class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.</p>
        </div>
      </div>
    </div>

    <section class="cta-section ">
      <div class="container">
        <div class="cta position-relative">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-doctor"></i>
                <span class="h3">58</span>k
                <p>Satisfy People</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-flag"></i>
                <span class="h3">700</span>+
                <p>Daily Sell Book</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-badge"></i>
                <span class="h3">40</span>+
                <p>Daily Request Book</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="counter-stat">
                <i class="icofont-globe"></i>
                <span class="h3">20</span>
                <p>Daily Donate Book</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="container text-center mb-5" style="margin-top: 120px;">
      <div class="row">
        <h2 class="mt-5">About Us</h2>
        @foreach ($abouts as $about)




        <div class="col-3 card ml-1 mt-5">

          @if(isset($about->image))
          <img src="{{asset('/storage/aboutus/'.$about->image)}}" alt="" style="width:500px;height:250px" class="img-fluid">
          @endif
          <h4>{{$about->title}}</h4>
          <p>{{$about->description}}</p>
        </div>



        @endforeach
      </div>
    </div>


</x-frontend.layout.master>
