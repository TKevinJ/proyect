<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetailsTest extends TestCase
{
    /** @test */
    public function testExample()
    {
        function it_details_ussers(){
        	$this->get('/formulario/{name}/{id}')
        	->AssertStatus(200)
        	->AssertSee ('Mostrando Detalles del Empleado {$name} <br> con el codigo : {$id}');
        }
    }
}
