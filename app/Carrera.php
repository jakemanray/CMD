<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function departamento(){ //carrera->carrera->nombre
        return $this->belongsTo(Departamento::class);
    }
}
