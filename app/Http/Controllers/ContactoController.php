<?php

namespace App\Http\Controllers;
use App\SiteContacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function contacto(Request $request){
       
        /*$contacto = new SiteContacto();
        $contacto->nome = $request->input('nome');
        $contacto->telefone = $request->input('telefone');
        $contacto->email = $request->input('email');
        $contacto->motivo_contato = $request->input('motivo_contato');
        $contacto->mensagem = $request->input('mensagem');
        $contacto->save();*/

        //print_r($contacto->getAttributes());

        //$contacto = new SiteContacto();
        //$contacto->create($request->all());



        //$contacto->fill($request->all());
        //$contacto->save();
    
        return view('site.contacto',['titulo'=>'Contacto']);
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',

        ]);
        //SiteContacto::create($request->all());
    }
}
