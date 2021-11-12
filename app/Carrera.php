<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['id', 'nombre', 'duracion_mes'];
    

    public function grupo()
    {
        return $this->hasMany('App\Grupo', 'id');
    }
}
