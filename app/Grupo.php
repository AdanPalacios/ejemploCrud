<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['id', 'letra', 'semestre','turno','id_carrera'];
    
    public function estudiante()
    {
        return $this->hasMany('App\Alumno', 'id');
    }

    public function carrera()         
    {
        return $this->belongsTo('App\Carrera', 'id');
    }
}
