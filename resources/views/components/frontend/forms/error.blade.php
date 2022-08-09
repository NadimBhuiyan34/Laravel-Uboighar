@props(['name'])

@error($name)
    <div {{ $attributes->merge(['class'=>'form-text text-danger']) }}>{{ $message }}</div>
@enderror