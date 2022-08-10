 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ $title }}</title>
    
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('ui/frontend/css/footer.css') }}">
 <!-- bootstrap.min css -->
<link rel="stylesheet" href="{{ asset('ui/frontend/plugins/bootstrap5/css/bootstrap.min.css') }}">
 
</head>
<body>
 
<x-frontend.layout.partials.header/> 
 

{{$slot}}

<x-frontend.layout.partials.footer/> 

</div>
</div>

@stack('nadim')
@stack('profile')
@stack('popover')
@stack('watch')
@stack('calender')

 {{-- Java script --}}
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<script src="{{ asset('ui/frontend/plugins/bootstrap5/js/bootstrap.min.js') }}"></script>
 
</body>
</html>
