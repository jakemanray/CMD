<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function carrera(){ //carrera->carrera->nombre
        return $this->belongsTo(Carrera::class);
    }
}
