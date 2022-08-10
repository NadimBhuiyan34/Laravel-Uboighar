 <x-frontend.layout.master>
    @slot('title')
    Events
    @endslot
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="container">
    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="{{asset('/storage/events/'.$event->image)}}" alt="" style="width:450px;height:250px">

            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">{{$event->title}}</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="fas fa-calendar-days margin-5px-right"></i> Date : {{$event->date}}</li>
                      <li><i class="far fa-clock margin-10px-right"></i> {{$event->time}}</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : {{$event->cheif_guest}}</li>
                    <li><i class="fas fa-location-dot margin-5px-right"></i> Location : {{$event->venue}}</li>


                </ul>

            <p>
             {{ $event->details}}


               <a href="{{route('upcomingEvent')}}" class=" btn btn-outline-dark btn-sm">Read Less</a>


            </p>
 
            </div>
        </div>
    </div>
    <hr>
    <!-- end event block -->



</div>

</x-frontend.layout.master>
