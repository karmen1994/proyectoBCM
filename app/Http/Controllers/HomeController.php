<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Incidencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('main');
    }
    public function aulas(){
        $aulas= Aula::all();
        $incidencias= Incidencia::where('estado','like','pendiente')->latest('id')->paginate(8);
        return view('incidencias.aulas', compact('aulas','incidencias'));
    }
    public function inventario(){
        return view('inventario.inventario');
    }
}
