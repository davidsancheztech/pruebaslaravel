<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('child', ['titulo' => 'Título de la página', 'dato' => array('dato_prueba'=>'ejemplo de dato prueba')]);
});
*/

Route::get('foo', function () {
    return 'Hello World';
});


Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);

Route::controllers([
	'/{id}/control/{tipo}' => 'CentralController',
	'/' => 'CentralController',
]);