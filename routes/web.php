<?php

use Illuminate\Support\Facades\Route;

/* ROTAS QUE APONTAM PARA SEU RESPECTIVO CONTROLLER */

/* ROTA QUE APONTA PARA INDEX - SE LIGA COM O CONTROLLER 'PrincipalController' EXECUTANDO O MÉTODO @ 'principal' - TEM COMO APELIDO 'sistema.index' */
Route::get('/', 'PrincipalController@principal')->name('principal');

Route::get('/scss/create', 'CreateController@create')->name('scss.create');/* ->middleware('auth'); */
