<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grupo;

class GrupoController extends Controller
{
    public function crearGrupo(){
        return view('grupo.crear');
    }

    public function crearGrupoPost(Request $request)
    {
        $this->validate($request, [
            'letra' => 'min:1|max:4|required|unique:grupos',
            'semestre' => 'numeric|min:1|max:15|required',
            'turno' => 'numeric|min:1|max:2|required',
            'id_carrera'=> 'required'
            
        ]);
        $grupo = new Grupo;
        $grupo->letra = $request->letra;
        $grupo->semestre = $request->semestre;
        $grupo->turno = $request->turno;
        $grupo->id_carrera = $request->id_carrera;
        $grupo->save();

        return redirect()->route('listaGrupo')->with('Grupo guardado');
    }

    public function listaGrupo()
    {
        $grupos = Grupo::select('id','letra','semestre','turno','id_carrera')->orderBy('id','ASC')->get();
        return view('grupo.lista', compact('grupos')); 
    }

    public function editarGrupo($grupos_id)
    {
        $grupo = Grupo::select('id','letra','semestre', 'turno')->first();
        return view('grupo.editar', compact('grupo'));
    }
    
    public function editarGrupoPost(Request $request, $grupos_id)
    {
        $this->validate($request,[
            'letra' => 'min:1|max:4|required|unique:grupos,letra,'.$grupos_id,
            'semestre' => 'numeric|min:1|max:15|required',
            'turno' => 'numeric|min:1|max:2|required',

        ]);
        $grupo = Grupo::find($grupos_id);
        $grupo->letra = $request->letra;
        $grupo->semestre = $request->semestre;
        $grupo->save();

        return redirect()->route('listaGrupo')->with('Carrera actualizada');
    }

    public function eliminarGrupo( $id)
    {
    $grupo = Grupo::find($id);
    $grupo->delete();
    return redirect()->route('listaGrupo')->with('Grupo eliminada');

    }
}
