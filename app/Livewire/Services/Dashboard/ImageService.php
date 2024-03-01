<?php

namespace App\Livewire\Services\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image as Intervention;
use File;

class ImageService
{
    public $sizes = [
        'verySmall' => '64',
        'small' => '128',
        'medium' => '300',
        'large' => '512',
        'veryLarge' => '800',
        'extraLarge' => '1920'
    ];

    /**
     * Método para subir una imagen en varias dimensiones
     */
    public function upload($path, $image, $name = null)
    {
        if($name == null){
            $name = time() . '-' . $image->getClientOriginalName();
        }

        Intervention::make($image)->save($path . 'original/' . $name);

        // Iterar sobre los tamaños y subir las imágenes redimensionadas
        foreach($this->sizes as $key){
            Intervention::make($image)
            ->resize($key, null, function($constraint){
                $constraint->aspectRatio();
            })
            ->save($path . $key . '/' . $name);
        }

        return $name;
    }

    /**
     * Método para borrar una imagen de todos los sub-directorios
     */
    public function destroy($path, $image)
    {
        if($image == '' || $image = null){
            return false;
        }

        foreach($this->sizes as $key){
            if(File::exists(public_path($path . $key . '/' . $image))){
                File::delete(public_path($path . $key . '/' . $image));
            }
        }
        return;
    }

}
