<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    /**
     * @return void
     * Tela de login do sistema
     */
    public function index()
    {
        return view('auth.login');
    }
}
