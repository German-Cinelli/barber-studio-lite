<div>
    <form wire:submit="save">

        <div class="text-center mb-3">
            @if($form->currentImage)
                <div>
                    <img src="{{ asset($this->small('storage/employees/', $form->currentImage)) }}" style="border-radius:50%;" loading="lazy">
                </div>
            @endif
        </div>

        @include('livewire.dashboard.employees.partials.form')

        <button type="submit" class="btn btn-warning float-end">
            Actualizar
        </button>
    </form>
</div>
