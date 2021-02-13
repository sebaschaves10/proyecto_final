<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    //
    public function index(){
        $categorias = Categoria::all();
        return view('categoria.listado_categoria', ['categorias' => $categorias]);   
    }
    public function formularioReg()
    {
        //Mostrar el formulario de registro y la captura de datos
        return view('categoria.form_registro');
    }


    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $repetidoCategoria = Categoria::where('nombreCategoria',$request->input('nombreCat'))->count();
        if($repetidoCategoria == 0){
                $category = new Categoria();
                $category->nombreCategoria = $request->input('nombreCat');
                $category->descripcion = $request->input('descripcionCat');
                $category->save();
                return redirect()->route('listadoCategorias');
        }else{
                return view('categoria.repetido');
        }
    }
    public function formularioAct($id){
        $categoria = Categoria::findOrFail($id);
        return view('categoria.form_actualiza', compact('categoria'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $category= Categoria::findOrFail($id);
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');

        $category->save();
        return redirect()->route('listadoCategorias');
    }
    public function eliminar($id){
        $category = Categoria::findOrFail($id);
        $category->estado = '0';
        $category->save();
        return redirect()->route('listadoCategorias');
    }
    public function activar($id){
        $category = Categoria::findOrFail($id);
        $category->estado = '1';
        $category->save();
        return redirect()->route('listadoCategorias');
    }
}
