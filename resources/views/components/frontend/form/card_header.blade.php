@props(['text'])
<div {{ $attributes->merge(['class'=>'bg-primary']) }}>
    <h2 {{ $attributes->merge(['class'=>'text-center']) }}>{{ $text }}</h2>
</div>