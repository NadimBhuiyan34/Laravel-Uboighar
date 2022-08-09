@props(['data', 'title', 'imagefile'])
<section class="gray-bg ">

    <section class="section">
        <h1 class="text-center" style="margin-bottom: 100px;">{{ $title }}</h1>

        <div class="row">
            @foreach ($data as $sellbook)
                <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">

                        <div class="card">
                            <a href="">

                                <img name="newbook_img" class="card-img-top img-fluid"
                                    src="{{ asset('storage/' . $imagefile . '/' . $sellbook->bookimage) }}"
                                    alt="" class="w-75 mx-auto p-3" style="height:200px ">
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
                                <a class="btn btn-success" href="{{ route('donetbookdetails', ['donetbookdetail' => $sellbook->id]) }}" role="button">View Detail</a>


                            </div>
                        </div>
                    
                </div>
            @endforeach
        </div>

    </section>
</section>
