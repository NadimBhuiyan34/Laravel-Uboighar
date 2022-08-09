<x-frontend.layout.master>

    @slot('title')
        BookDetails
    @endslot
    <div class="container ">
        <div class="row">
            <div class="col-md-6 ">
                <img src="{{ asset('storage/donatebook/' . $bookdetail->bookimage) }}" alt="">
            </div>
            <div class="col-md-6 ">
                <div class="row">
                    <h3><b>Book Title: </b>{{ $bookdetail->booktitle }}</h3>
                </div>
                <div class="row">

                    <h4> <b>Book Author: </b>{{ $bookdetail->bookauthor }}</h4>
                    <h4><b>Book Edition: </b>{{ $bookdetail->bookedition }}</h4>
                    <h5><b>Donar Name: </b>{{ $bookdetail->fullname }}</h5>
                </div>
                <a class="btn btn-primary text-light" href="{{ route('donets.create', $bookdetail->id) }}"
                    role="button">Request book</a>

            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row">
            <h2>Comments & Reviews</h2>
        </div>

        <div class="row mt-5 mb-5">
            <div class="media ">
                <img src="{{ asset('storage/donatebook/' . $bookdetail->bookimage) }}" width="250" height="150"
                    alt="sellbooks">
                <div class="media-body col-4">
                    <form action="{{ route('donatebooks.comments.store', ['donatebook' => $bookdetail->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <x-frontend.forms.textarea name="comment" text="comment" type="text" :value="old('comment')" />
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>

                    </form>
                </div>
                <div class="media-body col-4">
                    <h3>comments:</h3>
                    <ul>
                        @foreach ($bookdetail->comments as $comment)
                            <li>
                                <strong>{{ $comment->commentBy->name }}</strong> At
                                {{ $comment->created_at->diffForHumans() }}
                                <p>{{ $comment->body }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

    </div>



    <div class="container">
        <div class="row mt-5">
            <h2>Similar Products</h2>
        </div>
        <div class="row mt-5">
            @foreach ($books as $sellbook)
                <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
                    <form method="post" action="{{ route('donetbookdetails', ['donetbookdetail' => $sellbook->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <a href="">

                                <img name="newbook_img" class="card-img-top img-fluid"
                                    src="{{ asset('storage/donatebook/' . $sellbook->bookimage) }}" alt=""
                                    class="w-75 mx-auto p-3" style="height:200px ">
                            </a>
                            <div class="card-body">
                                <h5 name=""><b>{{ $sellbook->booktitle }}</b></h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">Doner Name:</br>{{ $sellbook->fullname }}</div>
                                    <div class="ml-auto"> <span class="text-muted">Stock:10</span> </div>
                                </div>
                                <input type="hidden" name="hidden_title" value="{{ $sellbook->booktitle }}" />
                                <input type="hidden" name="hidden_price" value="{{ $sellbook->price }}" />
                                <input type="hidden" name="hidden_author" value="{{ $sellbook->bookauthor }}" />

                                <input type="submit" name="add_to_cart"
                                    style="margin-top:5px;background:#009933;color:#fff;"
                                    class="btn btn-success w-100 rounded" value="View Details" />

                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-frontend.layout.master>
