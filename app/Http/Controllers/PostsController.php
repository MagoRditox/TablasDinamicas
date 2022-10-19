<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Table;
use App\Models\Table2;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *         $objects = Table::select('*')
     *      ->join('table_variable', 'table_variable.id', '=', 'table_main.id')
     *      ->get();
     * $objects = DB::table('table_main')->join('table_variable', 'table_variable.id', '=', 'table_main.id', 'full outer');
     * $second = DB::table('table_variable')
     *        ->rightJoin('table_main', 'table_main.id', '=', 'table_variable.id');
     * 
     *  $first = DB::table('table_main')
     *              ->leftJoin('table_variable', 'table_main.id', '=', 'table_variable.id')
     *              ->unionAll($second)
     *              ->get();
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
    /*  $title = $request->input('title');
        $body = $request->input('body');
        $post = DB::insert("INSERT INTO posts (title, body)
        VALUES ('$title', '$body');");
        */
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
        $object = Table2::findOrFail($id);
        $object->Color = $request->input('color');
        $object->Tamano = $request->input('tamano');
        $object->Formato = $request->input('formato');
        $object->save();

        $object2 = Table::findOrFail($id);
        $object2->Nombre = $request->input('nombre');
        $object2->Descripcion = $request->input('descripcion');
        $object2->Rol = $request->input('rol');
        $object2->save();

        return redirect('/')->with('success', 'Modificacion Realizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);   
        $user->delete();
        return redirect('/')->with('success', 'Modificacion Realizada');
    }
}