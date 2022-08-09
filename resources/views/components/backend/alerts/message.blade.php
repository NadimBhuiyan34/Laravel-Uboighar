
@props(['type', 'message'])
@if($message)
<div role="alert" {{$attributes->merge(['class' => 'alert alert-.$type d-flex align-items-center']) }}>
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        {{ $message }}
    </div>
</div>
@endif