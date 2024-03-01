<?php

namespace App\Livewire\Actions\Dashboard\PersonalInformation;

use App\Models\PersonalInformation;

class UpdateAction
{
    public function handle($id, $document, $location, $address, $phone)
    {
        return PersonalInformation::findOrFail($id)->update([
            'document' => $document,
            'location' => $location,
            'address' => $address,
            'phone' => $phone
        ]);
    }
}
