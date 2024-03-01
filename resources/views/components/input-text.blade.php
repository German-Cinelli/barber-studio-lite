@props(['name', 'label', 'type'])
<div class="form-floating">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" {{ $attributes }} placeholder="{{ $label }}">
    <label for="">{{ $label }}</label>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
