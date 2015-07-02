<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Maestro extends Model
{
    protected $table = 'maestros';

        public function grupo(){
        return $this->hasMany('Grupo','id_maestro');
    }
}


});