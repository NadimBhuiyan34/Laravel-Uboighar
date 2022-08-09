 
 <x-frontend.layout.master>
	<x-slot name="title">HomePage</x-slot>
<marquee behavior="" direction="" style="background-color: yellow; width:100%;color: black;"> Welcome to our University Boighar</marquee>
<x-frontend.layout.partials.carousel :carousels="$carousels"/> 
 
<div class="mx-auto mt-2" style="width:300px">
	<x-frontend.watch.watch/>
</div>
 

 
<section class="gray-bg ">
	<section class="section service gray-bg ">
		<h1 class="text-center" style="margin-bottom: 100px;">Best Sell Book</h1>
   
		   <div class="row">
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex">
						  <img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					    
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   
				   </div>
			   </div>
 




   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/2.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/3.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
   
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
						  </div>
					   </div>
				   </div>
			   </div>
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
   </section>
	 
</section>
</x-frontend.layout.master>
