<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }
}
