@props(['type'=>'danger'])

@if (session('message'))
        
  <div role="alert" aria-live="assertive"  class="toast show position-absolute text-center bg-white" data-bs-autohide="true" style=" margin: auto; top:0; left:0; right:0;  height:auto;  z-index: 1;" data-bs-delay="10000">

    
     
      @if (session('type')=='delete')
      <img src="{{ asset('ui/frontend/images/alert/delete.gif') }}" alt="" style="width:100px;height:100px" class="rounded-circle border text-center mt-2">
      @elseif (session('type')=='danger')
      <img src="{{ asset('ui/frontend/images/alert/warning.gif') }}" alt="" style="width:100px;height:100px" class="rounded-circle border text-center mt-2">
      @else
      <img src="{{ asset('ui/frontend/images/alert/372103860_CHECK_MARK_400px.gif') }}" alt="" style="width:100px;height:100px" class="rounded-circle border text-center mt-2">
      @endif
        
        <div class="toast-body">
          <p class="text-{{ session('type') }}">{{ session('message') }}</p>
          <button type="button" class="btn btn-success" data-bs-dismiss="toast">OK</button>
        </div>
      
        
  </div>
      
      
   


@endif
 