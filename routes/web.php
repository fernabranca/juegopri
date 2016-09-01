<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('usuario/{parametro}', function($codigo){
	return 'hola mundo'.$codigo;
});//RESPETAR LA BARRA INVERTIDA!
route::get('pagina','Main\Maincontroller@index');

//enrutar a un controlador especificado, donde palabraclave seria la escrita como algo/palabraclave
/*
route::get('palabraclave', [
	'as'=> 'palabraclave','uses'=>'loqueseacontroller@index' //lo que esta despues del arroba es el metodo de ese controller
]);
*/
