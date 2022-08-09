<x-frontend.layout.master>
    @push('profile')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/profile.css') }}">
    @endpush
    @slot('title')
        User Profile
    @endslot
{{-- profile start --}}
<div class="card emp-profile w-75 mx-auto">
    <form  role="form" action="{{ route('profiles.update',['profile'=>$profile->id]) }}" method="post" enctype="multipart/form-data">
      
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img id="profileimage" src="{{asset('/storage/profiles/'.$profile->image)}}" alt="profile"/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input id="profile" type="file" name="image"
                        multiple />
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{auth()->user()->name}}
                            </h5>
                            <h6>
                                <p>{{ $profile->profession }}</p>
                            </h6>
                            


                            
      
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" href="#home">About Me</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#menu2">Other Information</a>
                        </li>
                      
                      </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('profiles.show',['profile'=>auth()->user()->id]) }}" class="border p-2">Profile</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                        <x-backend.alertmessage.alertmessage type="success"/>
                                    <div class="col-md-12">
                                            <x-frontend.form.input name="name"  type="text" text="Name"   :value="old('name',auth()->user()->name )" />
                                    </div>
                                </div>
                                
                                    <div class="col-md-12">
                                         
                                        <x-frontend.form.input name="email"  type="text" text="Email"   :value="old('email',auth()->user()->email )" />
                                      
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <x-frontend.form.input name="profession" type="text" text="Profession"   :value="old('profession',$profile->profession)" />
                                </div>
                                    <div class="col-md-12">
                                        <x-frontend.form.input name="mobile" type="tel" text="Mobile"   :value="old('mobile',$profile->mobile)" />
                                    </div>
                                    <div class="col-md-12">
                                        <x-frontend.form.input name="address" type="text" text="Address"   :value="old('address',$profile->address)" />
                                    </div>
                                </div>
                                 <button class="btn btn-info">Update</button>
                                    
                                </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </form>           
</div>
{{-- profile end --}}
<script>
    let imagename=document.getElementById("profile");
    
     imagename.addEventListener("input",function(event){
        var tmppath = URL.createObjectURL(event.target.files[0]);
     
        document.getElementById("profileimage").src=tmppath;
        
     });
</script>
</x-frontend.layout.master>