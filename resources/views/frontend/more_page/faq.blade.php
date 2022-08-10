<x-frontend.layout.master>
    @slot('title')
        FAQ
    @endslot
    <div class="container d-flex justify-content-center">
        @if(isset($banner->image))
        <div class="card shadow">
            <img src="{{ asset('/storage/banner/' . $banner->image) }}" alt="Banner" class="w-100 rounded">
        </div>
        @endif
    </div>

    <section class="gray-bg mt-5">

        <div class="mx-auto text-center">
            <h3><span>Frequently </span> Asked Questions</h3>
            <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
        </div>

        <div class="card w-75 mx-auto mb-5">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach ($faqs as $faq)
                    @if (@isset($faq->answer))
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{ $faq->comment }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne{{ $faq->id }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ $faq->answer }}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="card w-75 mx-auto mb-5">
            <x-frontend.form.card_header text="Do You Have Any Questions" class="text-white" />
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('faqs.store') }}">
                    @csrf
                    <x-backend.alertmessage.alertmessage type="success" />
                    <div class="col-md-6">
                        <x-frontend.forms.input name="name" type="text" id="name" :value="old('name')" />
                    </div>
                    <div class="col-md-6">
                        <x-frontend.forms.input name="email" type="email" id="email" :value="old('email')" />
                    </div>
                    <br>
                    <div class="col-12">
                        <x-frontend.forms.textarea name="comment" type="text" id="comment" :value="old('comment')" />
                    </div>

            </div>

            <div class="mx-auto mb-2">
                <button type="submit" class="btn btn-primary ">Send Message</button>
            </div>
            </form>
        </div>

        </div>

</x-frontend.layout.master>

</section>
