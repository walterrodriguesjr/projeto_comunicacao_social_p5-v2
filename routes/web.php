<?php

use Illuminate\Support\Facades\Route;

/* ROTAS QUE APONTAM PARA SEU RESPECTIVO CONTROLLER */

/* ROTA QUE APONTA PARA VIEW PRINCIPAL - SE LIGA COM O CONTROLLER 'PrincipalController' EXECUTANDO O MÉTODO @ 'principal' - TEM COMO APELIDO 'principal' */
Route::get('/', 'PrincipalController@principal')->name('views.principal');

/* ROTA QUE APONTA PARA VIEW CREATE - EM METHOD GET - SE LIGA COM O CONTROLLER 'CreateController' EXECUTANDO O MÉTODO @ 'CREATE' - TEM COMO APELIDO 'create' */
Route::get('/create', 'CreateController@create')->name('create'); /* ->middleware('auth');  */

/* ROTA QUE APONTA PARA VIEW CREATE- EM METHOD POST - SE LIGA COM O CONTROLLER 'PrincipalController' EXECUTANDO O MÉTODO @ 'create' - TEM COMO APELIDO 'create' */
Route::post('/create', 'CreateController@create')->name('create'); /* ->middleware('auth');  */
