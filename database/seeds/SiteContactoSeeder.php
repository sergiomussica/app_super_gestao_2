<?php

use Illuminate\Database\Seeder;
use App\SiteContacto;

class SiteContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 99999-8888';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão';
        $contato->save();
        */

        factory(SiteContacto::class, 100)->create();
    }
}