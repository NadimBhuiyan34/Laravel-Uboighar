 <!--digital Clock start-->
 <div class="col-md-12 mb-5" id="digital-clock-body">
    <div class="" id="clock">
      {{-- <a class="navbar-brand mx-auto" href="{{ route('homepage') }}">
        <img src="{{ asset('ui/frontend/images/logo/uboighar.png') }}" alt="" class="img-fluid">
      </a> --}}
      <h2>THE TIME IS NOW</h2>
      <div class="" id="time">
        <div><span id="hour">00</span><span>Hours</span></div>
        <div><span id="minutes">00</span><span>Minutes</span></div>
        <div><span id="seconds">00</span><span>Seconds</span></div>
      </div>
    </div>
    <script type="text/javascript">
      function clock(){

        var hours = document.getElementById('hour');
        var minutes = document.getElementById('minutes');
        var seconds = document.getElementById('seconds');

        var h = new Date().getHours();
        var m = new Date().getMinutes();
        var s = new Date().getSeconds();
        if (h > 12) {
          hours.innerHTML = (h-12);
          minutes.innerHTML = m;
          seconds.innerHTML = s;
        }else {
          hours.innerHTML = h;
          minutes.innerHTML = m;
          seconds.innerHTML = s;
        }

      }
      var interval = setInterval(clock, 1000);
    </script>
   </div>