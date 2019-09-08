<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    function it_store_new_user() {
        $this->post('/user',[
            'id' => 1,
            'name' => 'Juan',
            'lastname' => 'Piguave',
            'tipoPerfil_id' => 3,
            'email' => 'juanpiguave@gmail.com',
            'password' => Hash::make('cursos'),
        ])->assertDontSee('Procesando informacion....');
    }

}
