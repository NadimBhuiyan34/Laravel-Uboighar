@props(['name'])

@error($name)
<p class="text-danger ml-3"> {{ $message }}</p>
@enderror