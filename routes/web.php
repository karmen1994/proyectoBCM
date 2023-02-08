<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[HomeController::class,'index'])->name('main');
Route::get('aulas',[HomeController::class,'aulas'])->name('aulas');
Route::get('aulas/{aula}',[HomeController::class,'equipos'])->name('aulas.equipos');
Route::get('inventario',[HomeController::class,'inventario'])->name('inventario');
Route::get('admin',[HomeController::class,'admin'])->name('admin');