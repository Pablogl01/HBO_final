<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//rutas estaticas

Auth::routes();
/*
Route::get('/',[App\Http\])
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::put('post/{id}', function ($id) {
    //
})->middleware('auth', 'role:admin');

Auth::routes();


Route::resource('puntuaciones','App\Http\Controllers\PuntuacionesController');
Route::resource('user','App\Http\Controllers\UserController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('video','App\Http\Controllers\VideosController');
Route::get('/edit', [App\Http\Controllers\VideosController::class, 'index'])->name('edit');
Route::get('/subir', [App\Http\Controllers\VideosController::class, 'create'])->name('subir');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/password', [App\Http\Controllers\UserController::class, 'password'])->name('password');
Route::get('/destroy', [App\Http\Controllers\VideosController::class, 'destroy'])->name('destroy');
Route::get('/guardar/{id}', [App\Http\Controllers\PuntuacionesController::class, 'guardar'])->name('guardar');
