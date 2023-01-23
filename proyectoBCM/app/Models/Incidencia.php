<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
    public function maestro(){
        return $this->belongsTo(Maestro::class);
    }
}
