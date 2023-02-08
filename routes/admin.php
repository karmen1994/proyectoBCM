<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::controller(HomeController::class)->group(function() {
    // Como dentro de App.Providers.RouteServiceProvider tiene el "->prefix('admin'), no hace falta ponerle admin a las rutas.
    Route::get('', 'admin')->name('admin');
    Route::get('/profesores', 'profesores')->name('profesores');

});