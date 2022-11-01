<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('ui/backend') }}/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('ui/backend/bootstrap5/css/bootstrap.min.css') }}">
 
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <x-backend.layout.partials.topbar/>
      
        <div id="layoutSidenav">
            <x-backend.layout.partials.sidebar/>
            <div id="layoutSidenav_content">
 
               
               {{ $slot }}
               
                <x-backend.layout.partials.footer/>
            </div>

        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        {{-- <script src="{{ asset('ui/backend/bootstrap5/js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('ui/backend') }}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('ui/backend') }}/assets/demo/chart-area-demo.js"></script>
        <script src="{{ asset('ui/backend') }}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('ui/backend') }}/js/datatables-simple-demo.js"></script>
      
    </body>
</html>