<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=201; $i <=215 ; $i++) { 
            Equipo::create([
                'averiado'=>'',
                'numero'=>$i,
                'aula_id'=>'1'
            ]);
        }
    }
}
