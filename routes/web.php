<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListadoController;
use app\Http\Controllers\CrudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[ ListadoController::class,'index']);
Route::get('Nuevo',function(){
    return view('new');
});

Route::post('new_register',[CrudController::class,'register']);