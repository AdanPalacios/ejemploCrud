<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['id', 'nombre', 'apellidos','edad','email','telefono','id_grupo'];
    
    public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'id');
    }
}
