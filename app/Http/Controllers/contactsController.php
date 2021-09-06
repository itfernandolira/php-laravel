<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    //função contacts
    public function contacts(Request $request) {

        //var_dump($_POST);
        //dd($request);
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        echo $request->input('nome');
        echo "<br>";
        echo $request->input('email');
        return view('site.contacts',['titulo'=>'First app - Contacto (variavel)']);
    }
}
