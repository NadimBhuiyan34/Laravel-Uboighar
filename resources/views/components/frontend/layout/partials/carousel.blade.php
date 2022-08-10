
@props(['carousels'])
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
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
 
</div>

