<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.index');
    }
    public function about(Request $request)
    {
        return view('pages.about');
    }
    public function services(Request $request)
    {
        return view('pages.services');
    }
    public function index(Request $request)
    {
        return view('pages.index');
    }
    /*
    public function index(Request $request)
    {
        $query=DB::table('dbo.Administrador')
        ->get();
        return view('pages.index',['listado'=>$query]);
    }

    */
}
