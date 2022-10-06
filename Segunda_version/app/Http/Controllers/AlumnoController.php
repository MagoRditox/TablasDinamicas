<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
class AlumnoController extends Controller
{

    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function create()
    {
        return view('alumnos.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'apellido' => 'required|max:75',
            'edad' => 'required|integer',
        ]);
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.ver', ['alumno' => $alumno]);
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.editar', ['alumno' => $alumno]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'apellido' => 'required|max:75',
            'edad' => 'required|integer',
            'telefono' => 'required|max:75',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->nombre= $request->nombre;
        $alumno->apellido= $request->apellido;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function destroy($id)
    {
        if(DB::table('alumno_curso')->where('alumno_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El alumno no puede ser eliminado.']);
        }
        else{
            $alumno = Alumno::findOrFail($id);
            $alumno->delete();
            return redirect()->action([AlumnoController::class, 'index']);
        }
    }
}
