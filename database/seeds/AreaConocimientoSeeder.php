<?php

use Illuminate\Database\Seeder;

class AreaConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('area_conocimiento')->insert([

           'descripcion' => 'Python',
           'estado' => 'Activo',
           'IdUsuarioCreacion' =>  1 ,
           'IdUsuarioModificacion' => 1
       ]);

        DB::table('area_conocimiento')->insert([

            'descripcion' => 'Java',
            'estado' => 'Activo',
            'IdUsuarioCreacion' =>  1 ,
            'IdUsuarioModificacion' => 1
        ]);

        DB::table('area_conocimiento')->insert([

            'descripcion' => 'Javascript',
            'estado' => 'Activo',
            'IdUsuarioCreacion' =>  1 ,
            'IdUsuarioModificacion' => 1
        ]);

        DB::table('area_conocimiento')->insert([

            'descripcion' => 'Php',
            'estado' => 'Activo',
            'IdUsuarioCreacion' =>  1 ,
            'IdUsuarioModificacion' => 1
        ]);
    }
}
