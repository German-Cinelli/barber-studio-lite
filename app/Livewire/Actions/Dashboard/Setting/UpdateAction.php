<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateAction
{
    public function handle($company_name, $mail_contact, $location, $address, $phone, $currency_symbol, $instagram_href, $about_us, $schedules)
    {
        return Setting::firstOrFail()->update([
            'company_name' => $company_name,
            'mail_contact' => $mail_contact,
            'location' => $location,
            'address' => $address,
            'phone' => $phone,
            'currency_symbol' => $currency_symbol,
            'instagram_href' => $instagram_href,
            'about_us' => $about_us,
            'schedules' => $schedules
        ]);
    }
}
