<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //

    public function teste(int $p1,int $p2){

       // return view('site.contacto')->with('p1',$p1)->with('p2',$p2);
        //return view('site.contacto',['p1'=>$p1,'p2'=>$p2]);//array associativo
        return view('site.contacto', compact('p1','p2'));//compact

    }
    
}
