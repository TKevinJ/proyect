<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test  */
     function it_welcome_ussers_with_name_apell()
    {
        $this->get('saludo/Kevin/Tantaruna')
              ->assertStatus(200)
              ->assertSee('Buen dia Kevin Tantaruna
		Usted esta identificado con el id : 999518');
    }

     /** @test  */
     function it_welcome_ussers_with_name()
    {
          $this->get('/saludo/Kevin')
              ->assertStatus(200)
              ->assertSee('Buen dia Kevin..... Te falta Agregar tu apellido.
        Usted esta identificado con el id : 999518');
    }
}

