<x-backend.layout.master>
    @slot('title')
    Faq backend
    @endslot
<div class="card mb-4">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Users Questions
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Comment</th>
            <th scope="col">Answer Active</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$faq->name}}</td>
            <td>{{$faq->email}}</td>
            <td>{{$faq->comment}}</td>
            <td>{{ $faq->answer ? 'Active' : 'In Active' }}</td>
            <td>
              <div class="d-flex ">
                  
                  {{-- <x-backend.buttonlink.button action="{{route('faqs.show',['faq'=>$faq->id])}}" name="An"/> --}}
                  <x-backend.buttonlink.answer action="{{route('faqs.show',['faq'=>$faq->id])}}"/>
                  <x-backend.buttonlink.editlink action="{{route('faqs.edit',['faq'=>$faq->id])}}"/>
                  <x-backend.buttonlink.deletelink action="{{route('faqs.destroy',['faq'=>$faq->id])}}"/>
              </div>
          </td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
       
    </div>
</div>
 
</x-backend.layout.master>