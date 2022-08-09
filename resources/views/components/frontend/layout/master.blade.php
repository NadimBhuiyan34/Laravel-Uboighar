 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $title }}</title>
    


<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('ui/frontend') }}/images/favicon.ico" />

<!-- bootstrap.min css -->
<link rel="stylesheet" href="{{ asset('ui/frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Icon Font Css -->
<link rel="stylesheet" href="{{ asset('ui/frontend/plugins/icofont/icofont/min.css') }}">
<!-- Slick Slider  CSS -->
<link rel="stylesheet" href="{{ asset('ui.frontend.plugins.slick-carousel.slick.slic') }}">
<link rel="stylesheet" href="{{ asset('ui/frontend') }}/plugins/slick-carousel/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('ui/frontend/css/footer.css') }}">
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('ui/frontend/js/mask.js') }}"></script>
    <script src="{{ asset('ui/frontend/js/mask_list.js') }}"></script>
</head>
<body>
 
<x-frontend.layout.partials.header/> 
 

{{$slot}}


<div class="mx-auto mt-2" style="width:300px">
	{{-- <x-frontend.watch.watch/> --}}
</div>
<x-frontend.layout.partials.footer/> 
</div>
</div>

@stack('nadim')
@stack('mask')
@stack('profile')
@stack('popover')
 

 
 <!-- jQuery -->
 <script src="{{ asset('ui/frontend') }}/js/jquery.min.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/popper.min.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/bootstrap.min.js"></script>
 <!-- wow animation -->
 <script src="{{ asset('ui/frontend') }}/js/animate.js"></script>
 <!-- select country -->
 <script src="{{ asset('ui/frontend') }}/js/bootstrap-select.js"></script>
 <!-- owl carousel -->
 <script src="{{ asset('ui/frontend') }}/js/owl.carousel.js"></script> 
 <!-- chart js -->
 <script src="{{ asset('ui/frontend') }}/js/Chart.min.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/Chart.bundle.min.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/utils.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/analyser.js"></script>
  
 <!-- nice scrollbar -->
 <script src="{{ asset('ui/frontend') }}/js/perfect-scrollbar.min.js"></script>
 <script>
    var ps = new PerfectScrollbar('#sidebar');
 </script>
 <!-- custom js -->
 <script src="{{ asset('ui/frontend') }}/js/custom.js"></script>
 <script src="{{ asset('ui/frontend') }}/js/chart_custom_style2.js"></script>
 <script>src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"</script>
</body>
</html>
