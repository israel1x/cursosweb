<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CONSULATA MANUAL
        //$idtipoperfil = DB::select('SELECT id FROM tipoPerfil WHERE perfil = ?', ["Admin"]);

        //$idtipoperfil = DB::table('tipoPerfil')->select('id')->take(1)->get();
        $idtipoperfil = DB::table('tipoPerfil')->select('id')->first();

        //$idtipoperfil = DB::table('tipoPerfil')->where('perfil', 'Admin')->value('id'); ***

        DB::table('users')->insert([
            //'id'=> 1,
            'name' => 'Juan',
            'lastname' => 'Pablo',
            //'tipoPerfil_id' => $idtipoperfil ****,
            'tipoPerfil_id' => $idtipoperfil->id,
            'email' => 'juanpablo98palo@gmail.com',
           // 'email_verified_at' => now(),
            'password' => Hash::make('cursos'),
            'IdUsuarioCreacion' =>  1 ,
            'IdUsuarioModificacion' => 1


        ]);
    }
}
