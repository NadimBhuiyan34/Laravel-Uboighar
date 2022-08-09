<x-frontend.layout.master>
    @slot('title')
   Cart
    @endslot
<!-- Slider Start -->
 <div class="container">
     <div class="container bg-warning">
           <h1 class="text-white text-center">View Selected Product</h1>
     </div>
     <table class="table table-bordered">
        <thead>
          <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quntity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {{-- <td>{{1}}</td>
            <td>{{ $cart->booktitle }}</td>
            <td>{{ $cart->bookauthor }}</td>
            <td>{{ $cart->price }}</td> --}}
          
          </tr>
          <tr>
						<td>Bangla</td>
						<td>2</td>
						<td>500</td>
						<td>12000</td>
						<td>Remove</td>
					</tr>
          <tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">1200</td>
						<td></td>
					</tr>
        </tbody>
      </table>
      {{-- <a href="{{ route('payment',['pay'=>$cart->id])}}"> <button class="btn btn-warning text-white" style="margin-left:500px;margin-bottom:40px;">Go to Pay</button></a> --}}
 </div>
</x-frontend.layout.master>