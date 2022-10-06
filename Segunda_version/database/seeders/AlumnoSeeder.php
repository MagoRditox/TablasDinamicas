<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno3 = new Alumno();
        $alumno3->nombre= 'Gaston';
        $alumno3->apellido='COntreras';
        $alumno3->edad = 18;
        $alumno3->telefono = '+725357789';
        $alumno3->direccion = 'Los Lirios #5566';
        $alumno3->save();

        $alumno4 = new Alumno();
        $alumno4->nombre= 'Alexa';
        $alumno4->apellido='Perez';
        $alumno4->edad = 21;
        $alumno4->telefono = '+5673424233';
        $alumno4->direccion = 'Cartegena #2343';
        $alumno4->save();

        $alumno5 = new Alumno();
        $alumno5->nombre= 'Carlos';
        $alumno5->apellido='Dorado';
        $alumno5->edad = 23;
        $alumno5->telefono = '+591355433';
        $alumno5->direccion = 'Arenas #490';
        $alumno5->save();
    }
}
