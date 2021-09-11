<?php

namespace App\Http\Controllers;

use App\Models\motivo;
use App\Models\siteContacto;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class contactsController extends Controller
{
    //função contacts
    public function contacts() {

         //ou em alternativa
        //$contacto->create($request->all());

        /* $motivos=[
            '1'=>'Dúvida',
            '2'=>'Elogio',
            '3'=>'Reclamação'
        ]; */

        $motivos=motivo::all();

        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)','motivos'=>$motivos]);
    }

    public function guardar(Request $request) {

        //executar a validação
        $request->validate([
            'nome'=>'required|min:3|max:40', //minimo de 3 caracteres e maximo de 40
            'telefone'=>'required',
            'email'=>'required',
            'motivo'=>'required',
            'mensagem'=>'required|max:2000'
        ]);
        
        //código mais limpo
        siteContacto::create($request->all());

        //return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);

    }
}
