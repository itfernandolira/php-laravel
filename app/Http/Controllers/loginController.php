<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index() {
        return view('site.login',['titulo'=>'Login']);
    }

    public function autenticar() {
        return "Autenticado";
    }
}
