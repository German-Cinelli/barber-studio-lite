<?php

namespace App\Livewire\Dashboard\Items;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Livewire\Forms\Dashboard\Item\CreateForm;

class CreateItem extends Component
{
    public CreateForm $form;

    use WithFileUploads;

    public $categories;

    public function save()
    {
        $this->validate();

        $this->form->store();
    }
}
