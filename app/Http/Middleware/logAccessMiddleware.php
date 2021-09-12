<?php

namespace App\Http\Middleware;

use App\Models\logAccess;
use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class logAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //$request - manipular o request (pedido) e dar seguimento
        //return $next($request);

        //dd($request);
        $ip=$request->server->get('REMOTE_ADDR');
        $rota=$request->getRequestUri();
        logAccess::create(['log'=>"IP $ip requisitou a rota $rota"]);
        //$response - manipular a response (response)
        //exemplo: não executar o return anterior e executar o return de response
        return Response('O middlware foi executado!');
    }
}
