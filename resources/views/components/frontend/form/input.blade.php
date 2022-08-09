@props(['name','text'=>'','visiable'=>''])
<div class="form-group">
    <div class="col-sm-11">

  <x-frontend.form.lavel name="{{ $name }}" text="{{ ucwords(str_replace('_',' ',$text)) }}"/>
        <input   id="{{ $name }}Input" {{ $attributes->merge([
            'class'=>"form-control"
        ]) }}  name="{{ $name }}"  placeholder="Enter your {{ $text }}" {{ $visiable }}>
    </div>
   <x-frontend.form.error name="{{ $name }}"/>
</div>
 