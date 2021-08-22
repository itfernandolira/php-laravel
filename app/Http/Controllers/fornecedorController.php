<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index() {
        $fornecedores=['Fornecedor 1'];

        $msg = isset($fornecedores[1]) ? "Existe a posição 1." : "Não existe a posição 1";
        echo $msg;

        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
