<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    //função contacts
    public function contacts() {
        return view('site.contacts');
    }
}
