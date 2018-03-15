
 <?php
Route::get('/', function(){
	return view('welcome');
});




Route::get('usuarios','UserController@index' );

//(where......) Sirve para darle privilegios de numero 
//.... ruta con  \d = privilegio numerico
//.... ruta con  \w = privilegio alfabetico y numero
Route::get('/usuarios/{id}','UserController@show')->where ('id','[0-9]+');

//
Route::get ('/usuarios/nuevo','UserController@create');
//

Route::get('/saludo/{name}/{apell?}','WelcomeController');
//
Route::get('/formulario/{name}/{id}','DetallisController@form');