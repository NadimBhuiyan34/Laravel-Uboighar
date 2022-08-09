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
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="{{asset('/storage/profiles/'.$profile->image)}}" alt="profile"    />
                    <div class="file btn btn-lg btn-primary">
                        {{auth()->user()->name}}
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{auth()->user()->name}}
                            </h5>
                            <h6>
                                {{ $profile->profession }}
                            </h6>
                            {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
 


                            
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" href="#home">About Me</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#menu1">Other Information</a>
                        </li>
                      
                      </ul>
                </div>
            </div>
             <div class="col-md-2">
                {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> --}}
                <a href="{{ route('profiles.edit',['profile'=>$profile->id]) }}">Edit Profile</a>
            </div> 
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link:</a><br/>
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
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        
                                 <p> {{auth()->user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{auth()->user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->mobile }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                       <p>{{ $profile->profession }} </p>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                       <p>{{ $profile->address }} </p>  
                                    </div>
                                </div>
                    </div>

                    <div  class="container tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Sell Book</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ count($sellbooks) }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Request Book</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ count($requestbooks) }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Donated Book</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ count($donatebooks) }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Orders</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                 
                                
                      
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>
{{-- profile end --}}
</x-frontend.layout.master>