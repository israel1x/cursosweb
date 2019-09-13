<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->insert([

            'nombre' => 'Manuel',
            'apellido' => 'Lopez',
            'cedula' => '0988829914',
            'email' => 'manuellopez@gmail.com'
        ]);
    }
}
