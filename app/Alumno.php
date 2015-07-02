<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    protected $table = 'alumnos';

    public function alugrup(){
        return $this->hasMany('Alugrup','id_alumno');
    }

}


