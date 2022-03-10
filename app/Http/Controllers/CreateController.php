<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* CLASS CONTROLA AS AÇÕES DA VIEW CREATE */
class CreateController extends Controller
{
    public function create()
    {
        /* VAR_DUMP RETORNA NA TELA O QUE FOI SUBMETIDO PELO FORM E O RETURN RENDERIZA A VIEW CREATE */
        var_dump($_POST);
        return view('create');
    }
}
