<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;
use DB;

class CamposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // D E S T R O Y
        $object = $request->input('tipocampo');

        DB::unprepared('ALTER TABLE table_variable DROP COLUMN '.strval($object));

        return back()->withInput()->with('success', 'Campo Eliminado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nombrecampo = $request->input('nombrecampo');
        $tipocampo = $request->input('tipocampo');
        $validated = $request->validate([
            'nombrecampo' => 'required|alpha',
        ]);

        DB::unprepared("ALTER TABLE table_variable ADD ".strval($nombrecampo)." ".$tipocampo);

        return back()->withInput()->with('success', 'Campo "'.$nombrecampo.'" Agregado Correctamente');
        return back()->withoutInput()->with('error', 'Formato invalido o campo ya existe'.$e);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
