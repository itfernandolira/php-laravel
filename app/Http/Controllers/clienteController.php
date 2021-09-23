<?php

namespace App\Http\Controllers;
use App\Models\cliente;


use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index() {

        $clientes=cliente::paginate(20);

        return view('app.cliente.index',['clientes'=>$clientes]);
    }

    public function remover($id) {
        cliente::find($id)->delete();

        return redirect()->route('app.clientes');

    }
}
