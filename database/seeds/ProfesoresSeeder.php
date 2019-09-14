<?php

use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
            'cedula' => '0988829914',
            'nombres' => 'Juan',
            'apellidos' => 'Lopez',
           // 'fecha_nacimiento' => '',
            'titulo' => 'Ing. en Sistemas',
            'email' => 'manuellopez@gmail.com',
            'direccion' => 'Los Almendros',
            'telf_convencional' => '072456876',
            'celular' => '0988829914',
        ]);
    }
}
