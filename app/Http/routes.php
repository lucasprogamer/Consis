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

Route::get('/', function () {
  	return view('consis');
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');

Route::group(['prefix' => 'submissao'], function(){
    Route::get('/', function()
    {
        return view('submissao');
    });
    Route::post('/submeter', 'submissaoController@submeter');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});






Route::resource('posts', 'postController');
Route::resource('eventos', 'eventoController');



Route::resource('submissoes', 'submissoesController');

Route::get('/instrucoessubmissao', function()
    {
        return view('submissoesartigos');
    });
