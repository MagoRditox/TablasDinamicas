<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CamposController;
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

//PagesController
Route::get('/', PagesController::class);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/index', [PagesController::class,'index']);

//PostsController Define
Route::resource('posts', PostsController::class);

//PostsController Add
Route::view('/table_new', 'posts.form');
Route::post('table_new', [PostsController::class, 'store']);

//PostsController Edit
Route::view('/table_mod', 'posts.form_mod');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');

//PostsController Show
Route::get('/show_all', [PostsController::class, 'index'])->name('posts.index');
Route::post('show', [PostsController::class, 'show'])->name('posts.show');

//PostsController Delete
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
//End PostsController

//CamposController Define
Route::resource('campo', CamposController::class);

//CamposController AlterTable Add
Route::post('campo_new', [CamposController::class, 'update'])->name('campo.update');

//CamposController AlterTable Del
Route::post('campo_del', [CamposController::class, 'store'])->name('campo.destroy');