<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacãoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$metodo_autenticacacao,$perfil)
    {
       // return $next($request);
       echo $metodo_autenticacacao."<br>";

       if($metodo_autenticacacao == 'padrao'){
            echo 'Verificar o utilizador e senha no banco de dados.';
       }else{
        echo 'Verificar o utilizador e senha no AD;';
       }


       return Response('Acesso Negad ! Rota exige autenticação!!!');

    }
}
