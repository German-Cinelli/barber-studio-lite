<?php

namespace App\Livewire\Traits;

trait ImageTrait {

    public function verySmall($path, $image){
        return $path . '64/' . $image;
    }

    public function small($path, $image){
        return $path . '128/' . $image;
    }

    public function medium($path, $image){
        return $path . '300/' . $image;
    }

    public function large($path, $image){
        return $path . '512/' . $image;
    }

    public function veryLarge($path, $image){
        return $path . '800/' . $image;
    }

    public function extraLarge($path, $image){
        return $path . '1920/' . $image;
    }

    public function original($path, $image){
        return $path . 'original/' . $image;
    }

}
