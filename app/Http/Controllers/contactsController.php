<?php

namespace App\Http\Controllers;

use App\Models\siteContacto;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class contactsController extends Controller
{
    //função contacts
    public function contacts(Request $request) {

        //var_dump($_POST);
        //dd($request);
        /* echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        echo $request->input('nome');
        echo "<br>";
        echo $request->input('email'); */

        
/*         $contacto=new siteContacto();
        $contacto->nome=$request->input('nome');
        $contacto->telefone=$request->input('telefone');
        $contacto->email=$request->input('email');
        $contacto->motivo=$request->input('motivo');
        $contacto->mensagem=$request->input('mensagem');

        $contacto->save(); */

        $contacto=new siteContacto();
        $contacto->fill($request->all());
        $contacto->save();

        //ou em alternativa
        //$contacto->fill($request->all());

        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);
    }
}
