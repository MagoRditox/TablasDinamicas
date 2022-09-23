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

Route::get('/', PagesController::class);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/index', [PagesController::class,'index']);

Route::view('/addT', 'posts.form');

Route::post('addT', [PostsController::class, 'store']);

Route::get('/show', [PostsController::class, 'index']);
