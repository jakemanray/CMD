<?php

namespace App\Services;

use App\Facultad;

class Facultades
{
    public function get()
    {
        $facultades = Facultad::get();
        $facultadesArray[''] = 'Selecciona una Facultad';
        foreach ($facultades as $facultad) {
            $facultadesArray[$facultad->id] = $facultad->nombre;
        }
        return $facultadesArray;
    }
}
