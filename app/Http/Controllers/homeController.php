<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //função home
    public function home() {
        echo "Bem-vindo à primeira app Laravel com Controller!";
    }
}
