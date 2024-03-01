@props(['name', 'label'])
<div class="form-floating">
    <textarea class="form-control @error($name) is-invalid @enderror" {{ $attributes }} rows="3" placeholder="Ingrese descripción"></textarea>
    <label for="floatingTextarea">{{ $label }}</label>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
