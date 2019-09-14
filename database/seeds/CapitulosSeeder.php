<?php

use Illuminate\Database\Seeder;

class CapitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capitulos')->insert([
            'descripcion' => 'Capitulo 1',
            'descripcion_larga' => 'Los primeros lenguajes de programación no usaban objetos, solo variables. Una variable podríamos decir que es un espacio de la memoria del ordenador a la que asignamos un contenido que puede ser un valor numérico  ',
            'nivel_id' => 1,
            'estado' => 'Activo'
        ]);

        DB::table('capitulos')->insert([
            'descripcion' => 'Capitulo 2',
            'descripcion_larga' => 'Los primeros lenguajes de programación no usaban objetos, solo variables. Una variable podríamos decir que es un espacio de la memoria del ordenador a la que asignamos un contenido que puede ser un valor numérico ',
            'nivel_id' => 1,
            'estado' => 'Activo'
        ]);

        DB::table('capitulos')->insert([
            'descripcion' => 'Capitulo 3 ',
            'descripcion_larga' => 'Los primeros lenguajes de programación no usaban objetos, solo variables. Una variable podríamos decir que es un espacio de la memoria del ordenador a la que asignamos un contenido que puede ser un valor numérico  ',
            'nivel_id' => 1,
            'estado' => 'Activo'
        ]);

        DB::table('capitulos')->insert([
            'descripcion' => 'Capitulo 4 ',
            'descripcion_larga' => 'Los primeros lenguajes de programación no usaban objetos, solo variables. Una variable podríamos decir que es un espacio de la memoria del ordenador a la que asignamos un contenido que puede ser un valor numérico  ',
            'nivel_id' => 1,
            'estado' => 'Activo'
        ]);
    }
}
