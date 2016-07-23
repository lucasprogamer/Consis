<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/








Route::resource('posts', 'postAPIController');

Route::resource('eventos', 'eventoAPIController');

Route::resource('submissoes', 'submissoesAPIController');