<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //TODO ---------------- FUNCIONES DE ADMINISTRADOR ---------------- 
    public function admin(){
        return view('admin.index');
    }
    public function profesores(){
        return view('admin.profesores.index');
    }
}
