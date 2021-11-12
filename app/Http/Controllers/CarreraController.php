<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carrera;

class CarreraController extends Controller
{
    public function crearCarrera(){
        return view('carrera.crear');
    }

    public function crearCarreraPost(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'min:3|required|unique:carreras',
            'duracion_mes' => 'numeric|min:36|required',
        ]);
        $carrera = new Carrera;
        $carrera->nombre = $request->nombre;
        $carrera->duracion_mes = $request->duracion_mes;
        $carrera->save();

        return redirect()->route('listaCarrera')->with('Carrera guardada');
    }

    public function listaCarrera()
    {
        $carreras = Carrera::select('id','nombre','duracion_mes')->orderBy('id','ASC')->get();
        return view('carrera.lista', compact('carreras')); 
    }

    public function editarCarrera($carreras_id)
    {
        $carrera = Carrera::select('id','nombre','duracion_mes')->where('id', '=', $carreras_id)->first();
        return view('carrera.editar', compact('carrera'));
    }
    
    public function editarCarreraPost(Request $request, $carreras_id)
    {   
        // dd($request->duracion_mes);
        //dd($request->nombre);

        $this->validate($request,[
            'nombre' => 'min:3|required|unique:carreras,nombre,'.$carreras_id,
            'duracion_mes' => 'numeric|min:36|required',
        ]);
        $carrera = Carrera::find($carreras_id);
        $carrera->nombre = $request->nombre;
        $carrera->duracion_mes = $request->duracion_mes;
        $carrera->save();

        return redirect()->route('listaCarrera')->with('Carrera actualizada');
    }

    public function eliminarCarrera($id)
    {
        $carrera = Carrera::find($id);
        $carrera->delete();
        return redirect()->route('listaCarrera')->with('Carrera eliminada');
    }
}
