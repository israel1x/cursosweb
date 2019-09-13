<?php

use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivel')->insert([

            'descripcion' => 'Principiante',
            'precio' => 'Bajo',
            'estado' => 'Activo',
            'curso_id' => 1,
            'IdUsuarioModificacion' => 1
        ]);

        DB::table('nivel')->insert([

            'descripcion' => 'Intermedio',
            'precio' => 'Madio',
            'estado' => 'Activo',
            'curso_id' => 1,
            'IdUsuarioModificacion' => 1
        ]);


        DB::table('nivel')->insert([

            'descripcion' => 'Avanzado',
            'precio' => 'Alto',
            'estado' => 'Activo',
            'curso_id' => 1,
            'IdUsuarioModificacion' => 1
        ]);
    }
}
