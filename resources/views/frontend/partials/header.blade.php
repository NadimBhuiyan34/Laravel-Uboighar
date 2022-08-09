
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>



<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

<!-- bootstrap.min css -->
<link rel="stylesheet" href="{{ asset('ui.frontend.plugins.bootstrap.css.bootstrap.min') }}">
<!-- Icon Font Css -->
<link rel="stylesheet" href="{{ asset('ui.frontend.plugins.icofont.icofont.min') }}">
<!-- Slick Slider  CSS -->
<link rel="stylesheet" href="{{ asset('ui.frontend.plugins.slick-carousel.slick.slic') }}">
<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset('ui.frontend.css.style') }}">
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
   <div class="header-top-bar">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <ul class="top-bar-info list-inline-item pl-0 mb-0">
                       <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@uboighar.com</a></li>
                       <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address DHAKA Bangladesh </li>
                   </ul>

               </div>
               <div class="col-lg-6">
                   <div class="text-lg-right top-right-bar mt-2 mt-lg-0">


                           <ul class="d-flex justify-content-end mt-2">


                                   <i class="fa-brands fa-facebook" style="margin-right: 20px"></i>
                                   <i class="fa-brands fa-twitter" style="margin-right: 20px;"></i>
                                   <i class="fa-brands fa-linkedin" style="margin-right: 20px;"></i>
                                   <i class="fa-brands fa-instagram" style="margin-right: 20px;"></i>






                           </ul>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <nav class="navbar navbar-expand-lg navigation" id="navbar">
       <div class="container">
             <a class="navbar-brand" href="{{ route('homepage') }}">
                 <img src="{{ asset('ui/frontend/images/logo/uboighar.png') }}" alt="" class="img-fluid">
             </a>

             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
           <span class="icofont-navigation-menu"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarmain">
           <ul class="navbar-nav ml-auto">

             <li class="nav-item dropdown">
               <a class="nav-link" href="home.php" id="dropdown02" data-toggle="">BUY BOOK <i class="icofont-thin-down"></i></a>
               <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/product_page/best_sellbook.php">BEST SELL BOOK</a></li>
                   <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/product_page/new_collection_book.php">NEW COLLECTION</a></li>
                   <li><a class="dropdown-item" href="{{ route('oldbook') }}">OLD BOOK</a></li>
                   <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/product_page/get_donatebook.php">GET DONATE BOOK</a></li>
               </ul>
             </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('sellbook') }}">SELL BOOK</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ route('requestbook') }}">REQUEST BOOK</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ route('donatebook') }}">DONATE  BOOK</a></li>
               <li class="nav-item"><a class="nav-link" href="http://localhost/Book_Store_Demo/include/product_page/earnmoney.php">EARN POINT</a></li>



                 <li class="nav-item dropdown">
                   <a class="nav-link  " href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGE <i class="icofont-thin-down"></i></a>
                   <ul class="dropdown-menu" aria-labelledby="dropdown03">

                       <li><a class="dropdown-item" href="{{ route('aboutus') }}">ABOUT US</a></li>
                       <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/more_page/contactus.php">CONTACT US</a></li>
                       <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/book_form/donatebook.php">DONATE BOOKS</a></li>
                       <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/more_page/events.php">EVENTS</a></li>
                       <li><a class="dropdown-item" href="http://localhost/Book_Store_Demo/include/more_page/FAQ.php">FAQ</a></li>

                   </ul>
                 </li>
           </li>
           <li>
             <a href="cart.php"> <i class="fa-solid fa-cart-plus" style="margin-top:15px;color: #000000;"></i></a>
          </li>
           <li>
              <a href="login.php"><i class="fa-solid fa-user" style="margin-top:15px; margin-left: 20px;color: #000000;"></i></a>
          </li>



           </ul>
         </div>
       </div>
   </nav>
</header>
</body>
</html>
