<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;


class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // return $next($request);
       $ip = $request->server->get('REMOTE_ADDR');
       $rota = $request->getRequestUri();
       LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);

       $resposta = $next($request);

       $resposta->setStatusCode(201,'O status da resposta e o texto da resposta foram alterados!!1');

        return $resposta;


       //return Response('Chegamos no middleare e finalizamos o próprio');
    }
}
