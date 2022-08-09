@props(['name'])

<div class="mb-3">

<x-frontend.forms.label for="{{$name}}Input" text="{{ ucfirst($name) }}"/>     

<input name="{{ $name }}" id="{{ $name.'Input' }}"
{{ $attributes->merge([
    'class' => "form-control" 
    ]) }}
>

<x-frontend.forms.error name="{{$name}}"/>

</div>