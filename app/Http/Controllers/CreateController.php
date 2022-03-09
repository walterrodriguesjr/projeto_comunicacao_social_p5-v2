<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* CLASS CONTROLA AS AÇÕES DA VIEW CREATE */
class CreateController extends Controller
{
    public function create()
    {
        var_dump('$_POST');
        return view('scss.create');
    }
}
