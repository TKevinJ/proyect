<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users= [ 'Kevin','admin',
        '<script>alert("Cliker")</script>'
    ];


    	return view ('DetallesUsers' , [
         //primera forma

         'users'=>$users ]
        )/** Segunda forma
        ->with ('users',$users) */;
    }

    public function show($id)
    {
    	return "mostrando detalle del usuario : {$id}" ;	
    }

     public function create()
     	{
          return 'Crear Nuevo Usuario';
     }
}
