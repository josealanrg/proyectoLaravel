<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Materia extends Model
{
   /* protected $table = 'materias';

         public function grupo(){
        return $this->hasMany('Grupo','id_materia');
    }*/
    protected $table='materias';
    public static function allmaterias(){
    	return self::all();
    }
}
