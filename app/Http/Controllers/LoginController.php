<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site.login',['titulo' => 'Login']);
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

        $existe = $user->where('email',$email)->where('password',$password)->get()->first();



        print_r($request->all());

    }
}
