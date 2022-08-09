 
    <x-backend.layout.master>
        @slot('title')
        Faq Answer
        @endslot
    <div class="card mb-4 mt-4">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Give FAQ Answer
           <a href="{{ route('abouts.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b>Give FAQ Answer</b></h4>
            </div>
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>User Name</th>
                  <td>{{ $about->name }}</td>
                 
                </tr>
                <tr>
                  <th>Question</th>
                  <td>{{ $about->comment }}</td>
                 
                </tr>
             
              </thead>
              <tbody>
              </tbody>
            </table>
          
            <form class="row g-3" method="POST" action="{{route('abouts.update',['about'=>$about->id])}}">
              @csrf
              @method('patch')
              <x-frontend.forms.textarea name="answer" type="text" id="answer" :value="old('answer')"/>
              <x-frontend.form.input name="name" type="hidden" :value="old('name',$about->name)"/>
              <x-frontend.form.input name="email" type="hidden" :value="old('email',$about->email)"/>
              <x-frontend.form.input name="comment" type="hidden" :value="old('comment',$about->comment)"/>
              <div class="col-6">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 