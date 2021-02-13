<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function index(){
    
        $clientes = DB::table('clientes')->get();
        return view('cliente.listado',['clientes'=>$clientes]);
    }
    public function formularioReg(){
        $clientes = Cliente::all();
        return view('cliente.form_registro',compact('clientes'));
    }

    public function registrar( Request $request){

        $repetidoCedula = Cliente::where('cedula',$request->input('cedulaCli'))->count();
        if($repetidoCedula == 0){
            $cliente = new Cliente();
            $cliente->nombreCliente = $request->input('nombreCli');
            $cliente->cedula = $request->input('cedulaCli');
            $cliente->genero = $request->input('generoCli');
            $cliente->direccion = $request->input('direccionCli');
            $cliente->telefono = $request->input('telefonoCli');
            
            $cliente->save();
            return redirect()->route('listadoClientes');
        }else{
            return view('cliente.repetido');
        }
    }
    public function formularioAct($id){
        $clientes = Cliente::findOrFail($id);
        return view('cliente.form_actualiza', compact('clientes'));
    }

    public function actualizar(Request $request, $id){
        $clie = Cliente::findOrFail($id);
        $clie->nombreCliente = $request->input('nombreCli');
        $clie->cedula = $request->input('cedulaCli');
        $clie->genero = $request->input('generoCli');
        $clie->direccion = $request->input('direccionCli');
        $clie->telefono = $request->input('telefonoCli');    

        $clie->save();
        return redirect()->route('listadoClientes');
    }
    public function eliminar($id){
        $clie = Cliente::findOrFail($id);
        $clie->estado = '0';
        $clie->save();
        return redirect()->route('listadoClientes');
    }
    public function activar($id){
        $clie = Cliente::findOrFail($id);
        $clie->estado = '1';
        $clie->save();
        return redirect()->route('listadoClientes');
    }

    public function form_consulta(){
        return view('cliente.form_consultar');
     }
 
     public function consultar(Request $request)
     {
        $nombre = $request->input('busqueda');
        $producto = Cliente::where('cedula', 'like',$nombre)->first();
        if($producto)
        return view('cliente.resultado', compact('producto'));
         else
         return view('cliente.mensaje');
 
     }
}
