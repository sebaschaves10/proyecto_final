<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;



class UsuariosController extends Controller
{
    //
    public function index(){
    
        $usuarios = DB::table('users')->get();
        return view('usuario.listado',['users'=>$usuarios]);
    }
    public function create()
    {
        return view('auth.register');
    }
}
