<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $this->truncateTables([
            'tipoPerfil',
            'users'

        ]);*/

        $this->call([TipoPerfilSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([AreaConocimientoSeeder::class]);
        $this->call([EstudiantesTableSeeder::class]);
    }

    protected function truncateTables(array $tables)
    {

        //DESACTIVAR LA VERIFICACION DE CLAVE FORANEA Y PODER BORRAR LAS TABLAS
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        DB::statement('ALTER TABLE users DISABLE TRIGGER ALL;');
        DB::statement('ALTER TABLE tipoPerfil DISABLE TRIGGER ALL;');


        foreach ($tables as $table) {
            //BORRAR TODAS LOS DATOS DE LAS TABLAS
            DB::table($table)->truncate();

        }

      /*  DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        DB::statement('SET FOREIGN_KEY_CHECKS = 2;');
        DB::statement('SET FOREIGN_KEY_CHECKS = 3;');*/
    }
}
