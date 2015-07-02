<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Grupo extends Model
{
    protected $table = 'grupos';

        public static function getGrupos($id_materia){
        	return self::join('maestros','grupos.id_maestro','=','maestros.id_maestro')
        			->join('materias','grupos.id_materia','=','materias.id_materia')
        			->select('grupos.aula','maestros.Nombre','materias.Nombre as nombre_materia')
        			->where('grupos.id_materia','=',$id_materia)
        			->get();
        		}
}
