<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso3 = new Curso();
        $curso3->nombre = 'Python';
        $curso3->nivel = 'Basico';
        $curso3->horas_academicas = '60 Horas';
        $curso3->profesor_id = 1;
        $curso3->save();

        $curso4 = new Curso();
        $curso4->nombre = 'Microcontroladores';
        $curso4->nivel = 'Basico';
        $curso4->horas_academicas = '40 Horas';
        $curso4->profesor_id = 2;
        $curso4->save();

        $curso5 = new Curso();
        $curso5->nombre = 'Desarrollo Web';
        $curso5->nivel = 'Intermedio';
        $curso5->horas_academicas = '80 Horas';
        $curso5->profesor_id = 3;
        $curso5->save();


        $curso3->alumnos()->attach(1);
        $curso3->alumnos()->attach(2);

        $curso4->alumnos()->attach(1);
        $curso4->alumnos()->attach(3);

        $curso5->alumnos()->attach(1);
        $curso5->alumnos()->attach(2);
    }
}
