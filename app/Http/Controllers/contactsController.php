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
        $request->validate(
            [
            'nome'=>'required|min:3|max:40', //minimo de 3 caracteres e maximo de 40
            'telefone'=>'required',
            'email'=>'email',
            'motivos_id'=>'required',
            'mensagem'=>'required|max:2000'
            ],
            [
                'nome.required'=>"Tem de indicar o nome",
                'nome.min'=>"O nome tem de conter mais de 3 caracteres",
                'nome.max'=>"O nome tem de conter menos de 40 caracteres",

                //metodo generalista
                'required'=>"Tem de indicar o :attribute",

                'mensagem.max'=>"A mensagem tem de ter no máximo 2000 caracteres",
                'email.email'=>"O email indicado não é válido"

            ]
    );
        
        //código mais limpo
        siteContacto::create($request->all());
        return redirect()->route('site.index');
        //return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);


    }
}
