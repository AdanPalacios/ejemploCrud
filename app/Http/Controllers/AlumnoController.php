<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    public function crearAlumno(){
        return view('alumno.crear');
    }

    public function crearAlumnoPost(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos'=> 'required',
            'edad' => 'required',
            'email' => 'required|unique:alumnos',
            'telefono' => 'required',
            'id_grupo' => 'required',
        ]);
        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->edad = $request->edad;
        $alumno->email = $request->email;
        $alumno->telefono = $request->telefono;
        $alumno->id_grupo = $request->id_grupo;
        $alumno->save();

        return redirect()->route('listaAlumno')->with('Alumno guardado');
    }

    public function listaAlumno()
    {
        $alumnos = Alumno::select('id','nombre','apellidos','edad','email','telefono')->orderBy('id','ASC')->get();
        return view('alumno.lista', compact('alumnos')); 
    }

    public function editarAlumno($alumnos_id)
    {
        $alumno = Alumno::select('id','nombre','apellidos','edad','email','telefono')->first();
        return view('alumno.editar', compact('alumno'));
    }
    
    public function editarAlumnoPost(Request $request, $alumnos_id)
    {
        //dd($request->nombre);

        $this->validate($request,[
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'email' => 'required|unique:alumnos,email,'.$alumnos_id,
            'telefono' => 'required',
        ]);
        $alumno = Alumno::find($alumnos_id);
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->edad = $request->edad;
        $alumno->email = $request->email;
        $alumno->telefono = $request->telefono;
        $alumno->save();

        return redirect()->route('listaAlumno')->with('Alumno actualizada');
    }
    public function eliminarAlumno($id)
    {
    $alumno = Alumno::find($id);
    $alumno->delete();
    return redirect()->route('listaAlumno')->with('Alumno eliminada');

    }
}
