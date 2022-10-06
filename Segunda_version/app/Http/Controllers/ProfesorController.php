<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Curso;
class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', ['profesores' => $profesores]);
    }

    public function create()
    {
        return view('profesores.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);

        $profesor = new Profesor($request->all());
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.ver', ['profesor' => $profesor]);
    }

    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.editar', ['profesor' => $profesor]);
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->nombre= $request->nombre;
        $profesor->apellido= $request->apellido;
        $profesor->profesion = $request->profesion;
        $profesor->grado_academico = $request->grado_academico;
        $profesor->telefono = $request->telefono;
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    public function destroy($id)
    {
        if(Curso::where('profesor_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El profesor no puede ser eliminado.']);
        }
        else{
            $profesor = Profesor::findOrFail($id);
            $profesor->delete();
            return redirect()->action([ProfesorController::class, 'index']);
        }
    }
}
