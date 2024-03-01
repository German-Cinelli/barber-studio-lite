<div>
    <div class="row">
        <div class="col-12">

            @if($images->isNotEmpty())
                <div class="callout callout-primary">
                    Tip! Presiona sobre una imagen para eliminarla.
                </div>
            @endif

            @forelse($images as $image)
                <img src="{{ asset($this->verySmall('storage/items/', $image->image)) }}"
                    loading="lazy"
                    style="cursor: pointer"
                    title="Eliminar"
                    wire:click="delete({{ $image->id }})"
                    wire:confirm="¿Deseas remover la imagen?"
                >
            @empty
            <div class="callout callout-danger">
                No se encontró galería.
            </div>
            @endforelse
        </div>
    </div>
</div>
