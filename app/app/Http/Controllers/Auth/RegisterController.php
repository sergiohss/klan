<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    /**
     * Formulário cadastro de usuário
     **/
    public function create()
    {
        return view('auth.register');
    }
}
