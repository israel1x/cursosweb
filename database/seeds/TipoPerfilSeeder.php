<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoPerfil')->insert([
            'perfil' => 'Admin',
        ]);

        DB::table('tipoPerfil')->insert([
            'perfil' => 'Estudiante',
        ]);

        DB::table('tipoPerfil')->insert([
            'perfil' => 'Usuario',
        ]);
    }
}
