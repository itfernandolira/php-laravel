<?php

namespace App\Http\Controllers;

use App\Http\Middleware\logAccessMiddleware;
use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function __construct()
    {
        $this->middleware(logAccessMiddleware::class);
    }
    //função aboutus
    public function aboutus() {
        return view('site.aboutus');
    }
}
