<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    //função contacts
    public function contacts() {

        var_dump($_GET);
        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);
    }
}
