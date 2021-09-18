<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index() {
        return view('site.login',['titulo'=>'Login']);
    }

    public function autenticar(Request $request) {
        //return "Autenticado";

        //Regras de validação
        $regras=[
            'utilizador'=>'email',
            'senha'=>'required'
        ];

        //Mensagens de feedback de validação
        $feedback=[
            'utilizador.email'=>'Tem de indicar um email válido no utilizador',
            'senha.required'=>'Tem de indicar a password'
        ];

        $request->validate($regras,$feedback);

        //print_r($request->all());
    }
}
