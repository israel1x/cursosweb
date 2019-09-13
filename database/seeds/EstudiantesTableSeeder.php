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

            'name' => 'Manuel',
            'apellido' => 'Lopez',
            'cedula' => 'manuellopez@gmail.com',
            'email' => 'manuellopez@gmail.com'
        ]);
    }
}
