@props(['name', 'label'])

<label class="form-label">{{ $label }}</label>
<input type="file" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" {{ $attributes }}>
@error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
