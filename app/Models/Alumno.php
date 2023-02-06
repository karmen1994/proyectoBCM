<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //relacion uno a muchos

    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }
}
