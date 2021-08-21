<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //função home
    public function home() {
        return view('site.home');
    }
}
