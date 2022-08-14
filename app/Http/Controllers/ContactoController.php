<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function contacto(){
        var_dump($_GET);
        return view('site.contacto',['titulo'=>'Contacto']);
    }
}
