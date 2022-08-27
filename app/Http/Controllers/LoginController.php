<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function index(Request $request){
        $erro = '';
        if($request->get('erro') == 1){
            $erro  = 'Usuário e ou senha não encontrados!';
        }
       


        return view('site.login',['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
        $regras =[
            'usuario' => 'email',
            'senha' => 'required'  
        ];

        $feedback = [
            'usuario.email' => 'O campo utilizador (email) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras,$feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');
        
        $user = new User();

        $usuario = $user->where('email',$email)->where('password',$password)->get()->first();

        if(isset($usuario->name)){
            echo 'usuário existe';
        }else{
            return redirect()->route('site.login',['erro' => 1]);
        }


        print_r($request->all());

    }
}
