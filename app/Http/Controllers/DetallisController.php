<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetallisController extends Controller
{
    //
    public function form($name,$id)
    {
    	return "Mostrando Detalles del Empleado {$name} <br> con el codigo : {$id}";
    }
}
