<x-frontend.layout.master>
    @slot('title')
   Payment
    @endslot
   <div class="container">
       <div class="row">
           <div class="col-5 card flex-md-col mb-3">
              <div class="card-header mt-3" style="background-color:#cefac3;">
				<h3 class="text-center">Billing Address</h3>
			  </div>
                <div class="card-body">
					<form>
						<div class="form-group">
						  
						  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
						  
						</div>
						<div class="form-group">
						
						  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
						</div>
						<div class="form-group">
						
						  <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Mobile">
						</div>
						<div class="form-group">
						
						  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
						</div>
						<div class="form-group">
						
						  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="City">
						</div>
						<div class="form-group">
						
						  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Zip Code">
						</div>
						 
						 
					  </form>
				</div>
               <div class="card mt-3 mb-5">
                 <div class="card-header" style="background-color: #c0f6fa;">
                    <h3 class="text-center">Payment Details</h3>
                 </div>
                 <div class="card-body">
                     <p class="text-center">Payment Method</p>
					 <div class="d-flex justify-content-evenly">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							 Bkash
							</label>
						  </div>
						  <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							 Nagad
							</label>
						  </div>
						  <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							 Rocket
							</label>
						  </div>
					 </div>
					 <p class="text-center" style="color:#03a861 ;font-size:14px;">Choose one number for payment  <br><span class="text-warning">Bkash: 01309080748 </span>  <span class="text-primary">Rocket: 01838082983 </span>  Nagad: 01838082983</p>
					 <form action="">

						<div class="form-group">
						
							<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
						  </div>
						<div class="form-group">
						
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Transaction Id">
						  </div>
						 <a href="cart.html">  <button type="button" class="btn btn-outline-danger" style="margin-left:60px ;">Back to Cart</button></a>
						  <a href="Confirm.html"> <button type="button" class="btn btn-outline-success"style="margin-left:60px ;">Place Order</button></a>
					 </form>
					 
                 </div>
                    
               </div>
               


           </div>
		   <div class="  col-6 ml-5  ">
			  <div class="card mt-3">
				  <div class="card-header " style="background-color: #def8fa;">
					  <h3 class="text-center">Amount</h3>
				  </div>
				  <div class="card-body">
					  <!-- Table Start -->
					  <table class="table table-bordered">
						<thead>
						  <tr>
							<th>Order No</th>
							<th>Book Title</th>
							<th>Book Author</th>
							<th>Total Price</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>{{1}}</td>
							<td>{{ $pay->booktitle }}</td>
							<td>{{ $pay->bookauthor }}</td>
							<td>{{ $pay->price }}</td>
						  
						  </tr>
						 
						   
						</tbody>
					  </table>
					  <!-- table end -->
				  </div>
				  <!-- card-body end -->
			  </div>
			  <!-- Amount card end -->
			  <div class="card mt-4">
				  <div class="card-header d-flex justify-content-center" style="background-color: #dc0f6b;">
					  <h3 class="text-white text-center mt-2">Bkash</h3>
					  <img src="images/bg/bksah1.png" alt="" style="height:50px ;">
				  </div>
				  <div class="card-body">
					  <p style="font-size:13px ;"> Send Money allows you to transfer money from your bKash Account to another bKash Account. To send money</p>
					  <ul class="list-group list-group-flush" style="font-size:13px ;">
						<li class="list-group-item">01. Go to your bKash Mobile Menu by dialing  <b>247#</b></li>
						<li class="list-group-item">02. Choose "Send Money</li>
						<li class="list-group-item">03. Enter the bKash Account Number you want to send money to</li>
						<li class="list-group-item">04. Enter the amount you want to send</li>
						<li class="list-group-item">05. Enter a reference about the transaction. (Do not use more than one word, avoid space or special characters)</li>
						<li class="list-group-item">06. Now enter your bKash Mobile Menu PIN to confirm the transaction Done! You and the Receiver both will receive a confirmation message from bKash</li>
					  </ul>
					  <p style="font-size:13px ;">There is no charge for "Send Money' up to 500 Taka with bKash App. By dialing "247#, 5 Taka charge will be applicable on every 'Send Money' transaction.</p>
				  </div>
			  </div>
			 </div>
		</div>
       </div>
      


   </div>
</x-frontend.layout.master>