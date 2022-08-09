@props(['data', 'title', 'imagefile'])
<section class="gray-bg ">
    <section class="section gray-bg ">
        <h1 class="text-center" style="margin-bottom: 100px;">{{ $title }}</h1>
        <div class="row">
            @foreach ($data as $sellbook)
 
             

            <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">

                    <div class="card">

                        <a href="{{ route('bookdetails', ['bookdetail' => $sellbook->id]) }}"><img name="newbook_img"
                                class="card-img-top img-fluid"
                                src="{{ asset('storage/' . $imagefile . '/' . $sellbook->bookimage) }}" alt=""
                                class=" mx-auto" style=" height:300px;width:300px">
                            </a>

                        <div class="card-body">
                            <h6 name="">Name : {{ $sellbook->booktitle }}</h6>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">Price : {{ $sellbook->price }} &#2547;</div>
                                <div class="ml-auto"> <span class="text-muted">Stock:10</span> </div>
                            </div>
                            <input type="hidden" name="hidden_title" value="{{ $sellbook->booktitle }}" />
                            <input type="hidden" name="hidden_price" value="{{ $sellbook->price }}" />
                            <input type="hidden" name="hidden_author" value="{{ $sellbook->bookauthor }}" />
                           
                              
                            <div class="d-flex justify-content-between mt-2">
                                <a class="btn btn-danger text-light " href="#" role="button"><i class="fa fa-cart-plus"></i>Add CART</a>
                                    <a class="btn btn-success" href="{{ route('bookdetails', ['bookdetail' => $sellbook->id]) }}" role="button">View Detail</a>
                            </div>
                        </div>
                    </div>
                
            </div>
        @endforeach
        </div>
        </div>
    </section>
</section>
