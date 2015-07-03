<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    protected $table = 'alumnos';

   public static function getAlumnos($id_grupo){
        	return self::join('alugrup', 'alumnos.id_alumno', '=', 'alugrup.id_alumno')->where('alugrup.id_grupo', '=',$id_grupo)->get();
    }

}


