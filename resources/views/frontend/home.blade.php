 
 <x-frontend.layout.master>
	<x-slot name="title">HomePage</x-slot>
	<marquee behavior="" direction="right" style=" background-color:#fcfefc;width:100%;color: black;">
		<div class="d-inline-block">
			<div class="d-inline-block">
				<img src="{{ asset('ui/frontend/images/book/welcome.gif') }}" alt="" style="width:100px;height:60px">
			</div>
			<div class="d-inline-block">
				<p><b>University Boighar</b></p>
			</div>
			<div class="d-inline-block">
				<img src="{{ asset('ui/frontend/images/book/walking-reading.gif') }}" alt="" style="width:100px;height:60px">
			</div>
		
		</div>
		
		 
		
	</marquee>
	<section class=" gray-bg ">
 
		 
 <div class="mx-3 row ">
 
  <div class="col-md-9 ">
	<x-frontend.layout.partials.carousel :carousels="$carousels"/> 
  </div>
  <div class="col-md-3 mx-auto " style="width:300px">
	<x-frontend.watch.watch/>
	{{-- <x-frontend.watch.calender/> --}}
	 <img src="{{ asset('ui/frontend/images/book/book2.png') }}" alt="" style="width:300px;height:240px"  class="rounded ">
  </div>
  
 

</div>
 
 
 
 
 
	<section class=" service gray-bg ">
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
	 
 
</x-frontend.layout.master>
