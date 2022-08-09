
@props(['carousels'])
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
 
   
  <div class="carousel-indicators">
    @php
    $active="active";
    $num=count($carousels);
@endphp
    @for ($i=0;$i<$num;$i++)
    <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $i }}" class="{{ $active }}"></button>
     @php
         $active="";
     @endphp
    @endfor
    {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button> --}}
    {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> --}}
  </div>
  
  <!-- The slideshow/carousel -->
  
  <div class="carousel-inner">
    @php
    $active="active";
    @endphp
    @foreach ($carousels as $carousel)
    <div class="carousel-item {{ $active }}">
      <img src="{{ asset('storage/carousel/'.$carousel->carouselimage) }}" alt="Los Angeles" class="d-block" style="width:100%;height:400px">
    </div>
    @php
    $active="";
    @endphp
    @endforeach
    {{-- <div class="carousel-item active">
      <img src="{{ asset('ui/frontend/images/banner/bg.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
    </div> --}}
    {{-- <div class="carousel-item">
      <img src="{{ asset('ui/frontend/images/banner/event2.png') }}" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('ui/frontend/images/banner/image2.jpg') }}" alt="New York" class="d-block" style="width:100%">
    </div>
  </div> --}}
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
 
</div>

 

</body>
</html>
