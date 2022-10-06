<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = DB::table('cursos')
            ->select('cursos.id', 'cursos.nombre', 'cursos.nivel', 'cursos.horas_academicas','profesores.nombre as profesor')
            ->leftJoin('profesores', 'profesores.id', '=', 'cursos.profesor_id')
            ->get();
        $aux = 0;
        foreach ($cursos as $curso) {
            $cursos[$aux]->alumnos = DB::table('alumno_curso')
                                        ->select( 'alumnos.nombre as alumno')
                                        ->leftJoin('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')
                                        ->where('alumno_curso.curso_id', '=', $curso->id)
                                        ->get();
            $aux++;
        }
        return view('cursos.index', ['cursos' => $cursos]);
    }

    public function create()
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        return view('cursos.crear', ['profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|max:75',
            'nivel' => 'required|max:35',
            'profesor_id' => 'required',
            'alumno_ids' => 'required|array',
        ]);
        $curso = new Curso($request->all());
        $curso->save();
        foreach ($request->alumno_ids as $alumno_id){
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']);
    }

    public function show($id)
    {
        $curso = Curso::with(['profesor'])->where('cursos.id', '=', $id)->first();
        $alumno_curso = DB::table('alumno_curso')->select('alumnos.nombre')->join('alumnos', 'alumnos.id', '=','alumno_curso.alumno_id')->where('curso_id', '=', $id)->get();
        return view('cursos.ver', ['curso' => $curso, 'alumno_curso' => $alumno_curso]);
    }

    public function edit($id)
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $curso = Curso::findOrFail($id);
        $alumno_curso = DB::table('alumno_curso')->where('curso_id', '=', $id)->get();
        return view('cursos.editar', ['curso' => $curso, 'alumno_curso' => $alumno_curso, 'profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horas_academicas = $request->horas_academicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save();
        $curso->alumnos()->detach();
        foreach ($request->alumno_ids as $alumno_id){
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']);
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->alumnos()->detach();
        $curso->delete();
        return redirect()->action([CursoController::class, 'index']);
    }
}
