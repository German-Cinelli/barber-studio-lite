@props(['name', 'value', 'label', 'badge'])

<div class="form-check">
    <input id="radio-{{ $value }}" value="{{ $value }}" class="form-check-input" type="radio" id="{{ $name }}" {{ $attributes }}>
    <label class="form-check-label" for="radio-{{ $value }}">
        {{ $label }}
    </label>
    @if (isset($badge))
        <span class="badge badge-sm bg-danger" style="margin-left: 1em">{{ $badge }}</span>
    @endif


</div>
