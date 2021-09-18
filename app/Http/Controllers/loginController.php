<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $email=$request->get('utilizador');
        $password=$request->get('senha');

        //Iniciar o Model User
        $user=new User();

        $utilizador=$user->where('email',$email)->where('password',$password)->get()->first();

        //print_r($utilizador);

        if (isset($utilizador->name))
            echo "O utilizador existe!";
        else
            echo "O utilizador não existe!";



        
    }
}
