@props(['name'])
<form method="GET" {{ $attributes }}>
    @csrf
    <button type="submit"{{ $attributes->merge([
        'class' => "btn d-flex btn btn-outline-success btn-sm" 
        ]) }}>
        {{ $name }}
    </button>
</form> 