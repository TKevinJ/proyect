<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke($name,$apell=null)
    {
        $name = ucfirst($name);
	$apell = ucfirst($apell);

	if ($apell) {
		return "Buen dia {$name} {$apell}
		Usted esta identificado con el id : 999518";
	}
	else{
		return "Buen dia {$name}..... Te falta Agregar tu apellido.
        Usted esta identificado con el id : 999518";
	};
    }
}
