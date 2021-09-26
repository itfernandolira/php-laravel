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

    public function editar($id) {

        $cliente=cliente::find($id);

        //return redirect()->route('app.clientes');
        return view('app.cliente.editar',['cliente'=>$cliente]);

    }

    public function update($id,Request $request) {

        $cliente=cliente::find($id);

        //dd($request);

        $cliente->nome=$request->nome;
        $cliente->pais=$request->pais;
        $cliente->email=$request->email;

        $cliente->save();

        return redirect()->route('app.clientes');
        //return view('app.cliente.editar',['cliente'=>$cliente]);

    }
}
