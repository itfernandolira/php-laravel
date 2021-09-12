<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class authMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodoAutenticacao, $perfil)
    {
        //return $next($request);
        echo $metodoAutenticacao." - ". $perfil;
        if (false){
            return $next($request);
        }
        else {
            return Response("<br>Acesso negado! Rota exige autenticação!");
        }
        
    }
}
