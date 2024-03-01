<?php

namespace App\Livewire\Forms\Dashboard\Item;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Item\UpdateStatusAction;

class UpdateStatusForm extends Form
{
    public ?Item $item;

    public function update($item)
    {
        UpdateStatusAction::handle($item->id);
    }
}
