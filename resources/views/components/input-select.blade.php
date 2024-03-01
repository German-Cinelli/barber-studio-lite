@props(['name', 'label', 'collection'])
<div class="form-floating">
    <select id="floatingSelect" class="form-select @error($name) is-invalid @enderror" {{ $attributes }} aria-label="Seleccione opción">
        <option value="" selected>Seleccione...</option>
        @foreach($collection as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <label for="floatingSelect">{{ $label }}</label>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
