  <!-- <div id="MyClockDisplay" class="clock bg-dark w-50 rounded-pill text-center " onload="showTime()"></div> -->

  <x-frontend.layout.master>
      @slot('title')
          Get DonateBook
      @endslot
      <x-frontend.productpage.getdonate :data="$donatebooks" title="Donate Books" imagefile="donatebook" />




  </x-frontend.layout.master>
