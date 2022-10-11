<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller('posts', PostsController::class);

Route::resource('posts', PostsController::class);
*/

//PagesController
Route::get('/', PagesController::class);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/index', [PagesController::class,'index']);


//PostsController
Route::view('/table_new', 'posts.form');
Route::post('table_new', [PostsController::class, 'store']);

Route::view('/table_mod', 'posts.form_mod');
Route::post('table_mod', [PostsController::class, 'edit']);

Route::get('/show_all', [PostsController::class, 'index']);

Route::post('show', [PostsController::class, 'show'])->name('posts.show');


Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');