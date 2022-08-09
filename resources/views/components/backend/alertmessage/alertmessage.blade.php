@props(['type'=>'danger'])

@if (session('message'))
        
<div class="alert alert-{{ $type }} alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    {{ session('message') }}
  </div>

@endif