<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Table2;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $objects = Table::select('*')
           ->join('table_variable', 'table_variable.id', '=', 'table_main.id')
           ->get();

        return view('posts.show')->with('objects', $objects);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'rol'=> 'required'
        ]);
        
        $post = new Table;
        $post->Nombre = $request->input('nombre');
        $post->Descripcion = $request->input('descripcion');
        $post->Rol = $request->input('rol');
        $post->save();

        DB::unprepared('SET IDENTITY_INSERT table_variable ON');

        $mod = new Table2;
        $mod->id = $post->id;
        $mod->Color = $request->input('color');
        $mod->Tamano = $request->input('tamano');
        $mod->Formato = $request->input('formato');
        $mod->save();

        DB::unprepared('SET IDENTITY_INSERT table_variable OFF');
        
        return redirect('/table_new')->with('success', 'Insercion Realizada');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = Table::find($id);
        return view('posts.show')->with('object', $object);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $object = Table::select('*')
           ->join('table_variable', 'table_variable.id', '=', 'table_main.id')
           ->where('table_main.id', $id)
           ->get();

        return view('posts.form_mod')->with('object', $object);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try{
        $object2 = Table::findOrFail($id);
        $object2->Nombre = $request->input('nombre');
        $object2->Descripcion = $request->input('descripcion');
        $object2->Rol = $request->input('rol');
        $object2->save();

        $object = Table2::findOrFail($id);

        foreach ( $object->getAttributes() as $key => $value){
            if ($key === 'id' || $key === 'created_at' || $key === 'updated_at' ){}
            else
            $object->$key = $request->input(strtolower($key));
            $object->save();
        }
        return redirect('/')->with('success', 'Modificacion Realizada');

    }catch(\Exception $e){
        return back()->withInput()->with('error', 'El campo modificado ' .$key.' posee formato incorrecto, intente nuevamente');
    }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabla_variable = Table::findOrFail($id);   
        $tabla_variable->delete();

        $tabla_main = Table2::findOrFail($id);   
        $tabla_main->delete();

        return redirect('/')->with('success', 'Modificacion Realizada');
    }
}