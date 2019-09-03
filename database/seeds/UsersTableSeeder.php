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
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Juan',
            'lastname' => 'Pablo',
            'email' => 'juanpablo98palo@gmail.com',
           // 'email_verified_at' => now(),
            'password' => Hash::make('cursos'),
            'IdUsuarioCreacion' =>  2 ,
            'IdUsuarioModificacion' => 2 ,
            'fechaCreacion' => Carbon::now() ,
            'fechaModificacion' => Carbon::now(),

        ]);
    }
}
