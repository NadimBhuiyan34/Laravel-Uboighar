@props(['text' => 'Show', 'icon' => ''])

<a class="btn btn-sm btn-info" {{$attributes}}>
    @if($icon)
        <i class="{{$icon}}"></i>
    @else
        {{ $text }}
    @endif    
</a>
