<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //função home
    public function home() {

        $motivos=[
            '1'=>'Dúvida',
            '2'=>'Elogio',
            '3'=>'Reclamação'
        ];

        return view('site.home',['motivos'=>$motivos]);
    }
}
