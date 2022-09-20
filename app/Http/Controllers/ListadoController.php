<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //a ver si funca
        $consulta=DB::table('dbo.teacher')
        ->get();
        return view('index',['listado'=>$consulta]);
    }


}
