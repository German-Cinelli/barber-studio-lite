<?php

namespace App\Traits;

trait NotificationTrait {

    public function notification($type, $title){
        $this->dispatchBrowserEvent('toast', [
            'type' => $type,
            'title' => $title
        ]);
    }
}
