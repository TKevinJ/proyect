<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test  */

     function it_loads_the_ussers_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ;
    }

     /** @test  */

     function it_loads_the_ussers_details_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('mostrando detalle del usuario : 5');
    }


     /** @test  */

    function it_loads_the_new_ussers__page()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear Nuevo Usuario');
    }

}
