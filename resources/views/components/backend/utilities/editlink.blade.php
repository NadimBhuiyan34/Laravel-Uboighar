@props(['text' => 'Edit', 'icon' => ''])

<a {{$attributes->merge(['class' => 'btn btn-sm btn-warning']) }}>
    @if($icon)
        <i class="{{$icon}}"></i>
    @else
        {{ $text }}
    @endif    
</a>
