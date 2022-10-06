<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;
class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesor3 = new Profesor();
        $profesor3->nombre = "Jaime";
        $profesor3->apellido = 'Peredo';
        $profesor3->profesion = 'Ingeniero Industrial';
        $profesor3->grado_academico = 'Magister';
        $profesor3->save();

        $profesor4 = new Profesor();
        $profesor4->nombre= 'Josue';
        $profesor4->apellido = 'Coria';
        $profesor4->profesion = 'Hoteleria';
        $profesor4->grado_academico = 'Licenciatura';
        $profesor4->save();

        $profesor5 = new Profesor();
        $profesor5->nombre= 'Andrea';
        $profesor5->apellido='Jimenez';
        $profesor5->profesion = 'Pedagogia en Ingles';
        $profesor5->grado_academico = 'Masterado';
        $profesor5->save();

        $this->call(ProfesorSeeder::class);
    }
}
