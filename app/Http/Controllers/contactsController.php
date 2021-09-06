<?php

namespace App\Http\Controllers;

use App\Models\siteContacto;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class contactsController extends Controller
{
    //função contacts
    public function contacts() {

         //ou em alternativa
        //$contacto->create($request->all());

        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);
    }

    public function guardar(Request $request) {

        //código mais limpo
        siteContacto::create($request->all());

        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);

    }
}
