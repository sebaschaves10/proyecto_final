<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    //
    public function index(){
        return view ('principal');
    }
    public function general(){
        return view('administracion.informacion');
    }
}
