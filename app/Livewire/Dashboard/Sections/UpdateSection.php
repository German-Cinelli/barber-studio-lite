<?php

namespace App\Livewire\Dashboard\Sections;

use Livewire\Component;

use App\Livewire\Forms\Dashboard\Section\UpdateForm;

use App\Models\Section;

class UpdateSection extends Component
{
    public UpdateForm $form;

    public function mount()
    {
        $section = Section::first();
        $this->form->setSection($section);
    }

    public function update($field)
    {
        $this->validate();

        $value = $this->form->$field;

        $this->form->update($field, $value);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Datos actualizados'
        ]);
    }

    public function changeStatus($field)
    {
        $this->form->updateShowSection($field);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Estado modificado!'
        ]);
    }
}
