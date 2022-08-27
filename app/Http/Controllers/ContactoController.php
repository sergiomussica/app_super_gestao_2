<?php

namespace App\Http\Controllers;
use App\SiteContacto;
use Illuminate\Http\Request;
use App\MotivoContato;

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

        $motivo_contatos = MotivoContato::all();
    
        return view('site.contato',['titulo' => 'Contacto', 'motivo_contatos' => $motivo_contatos ]);
    }

    public function salvar(Request $request){
        $regras =             [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',

            'email.email' => 'O email informado não é válido',

            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);

        SiteContacto::create($request->all());
        return redirect()->route('site.index');
    }
}
