@props([
    'type'=>'submit',
    'text',
    'color'=> 'default'
])

<button type="{{ $type }}" {{$attributes->merge(['class' => 'btn btn-sm btn-danger']) }} >
    {{$text}}
</button>