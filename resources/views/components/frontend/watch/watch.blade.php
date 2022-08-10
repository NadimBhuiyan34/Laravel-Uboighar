 <!--digital Clock start-->
 <body onload="initClock()">
  <!--digital clock start-->
  <div class="datetime">
    <div class="date">
      <span id="dayname">Day</span>,
      <span id="month">Month</span>
      <span id="daynum">00</span>,
      <span id="year">Year</span>
    </div>
    <div class="time">
      <span id="hour">00</span>:
      <span id="minutes">00</span>:
      <span id="seconds">00</span>
      <span id="period">AM</span>
      
    </div>
  </div>
  <!--digital clock end-->

  @push('watch')
  <script src="{{ asset('ui/frontend/js/watch.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/watch.css') }}">
  @endpush

</body>