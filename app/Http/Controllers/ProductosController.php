<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    //
    public function listado()
    {
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precio','pro.cantidad','pro.nombreProducto', 'pro.foto', 'cat.nombreCategoria', 'pro.categoria','pro.estado')
                    ->orderby('pro.id','asc')
                    ->get();
        return view('producto.listado', ['productos' => $productos]);
    }
    public function porProducto(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precio','pro.cantidad','pro.nombreProducto', 'pro.foto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.nombreProducto','asc')
                    ->get();
        return view('producto.listado', ['productos' => $productos]);
    }
    
    public function porCategoria(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precio','pro.cantidad','pro.nombreProducto', 'pro.foto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.categoria','asc')
                    ->get();
        return view('producto.listado', ['productos' => $productos]);
    }

    public function porPrecio(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precio','pro.cantidad','pro.nombreProducto', 'pro.foto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.precio','asc')
                    ->get();
        return view('producto.listado', ['productos' => $productos]);
    }
    public function detalle($id) {
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precio','pro.cantidad','pro.nombreProducto', 'pro.foto', 'cat.nombreCategoria', 'pro.categoria')
                    ->where('pro.id',"$id")
                    ->first(); 
        return view('producto.detalle', ['productos' => $productos]);

    }
    public function formulario_registrar(){
        $categorias = Categoria::all();
        return view('producto.form_registro', compact('categorias'));
    }

    public function registrar(Request $request){
        /*$repetido = Producto::where('codigoProducto',$request->input('Cod'))->count();
        if($repetido == 0){*/
            $producto = new Producto();
            $producto->nombreProducto = $request->input('nombrePro');
            $producto->cantidad = $request->input('cantidadPro');
            $producto->precio = $request->input('precioPro');
            $producto->estado = '1';
            if($request->hasFile('urlfoto')){
                $file = $request->file("urlfoto");
                $nombrearchivo = $file->getClientOriginalName();
                $file->move(public_path("/assets/img/productos/"),$nombrearchivo);
                $producto->foto = $nombrearchivo;
            }
            $producto->categoria = $request->input('categorias');
            $producto->save();
            return redirect()->route('listadoProductos');
        /*}else{
            return view('inventario.productos.repetido');
        }*/
    }

    public function formulario_actualizar($id){
        $producto = Producto::findOrFail($id);
        $category = Categoria::all();
        return view('producto.form_actualiza', compact('producto','category'));
    }

    public function actualizar(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidad = $request->input('cantidadPro');
        $producto->precio = $request->input('precioPro');
        $producto->estado = '1';
        if($request->hasFile('urlfoto')){
            $file = $request->file("urlfoto");
            $nombrearchivo = $file->getClientOriginalName();
            $file->move(public_path("/assets/img/productos/"),$nombrearchivo);
            $producto->foto = $nombrearchivo;
        }
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoProductos');
    }

    public function eliminar($id){
        $producto = Producto::findOrFail($id);
        $producto->estado = '0';
        $producto->save();
        return redirect()->route('listadoProductos');
    }

    public function activar($id){
        $producto = Producto::findOrFail($id);
        $producto->estado = '1';
        $producto->save();
        return redirect()->route('listadoProductos');
    }

    public function formulario_consultar(){
        return view('inventario.productos.form_consulta');
    }
 
    public function consultar(Request $request){
        $codigo = $request->input('codigo');
 
        $producto = DB::table('productos as pro')
                     ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                     ->select('pro.id','pro.precio','pro.nombreProducto', 'pro.foto','pro.cantidad', 'pro.categoria','cat.nombreCategoria')
                     ->where('pro.id', "$codigo")
                     ->first();
        if($producto)
             return view('producto.resultado', ['producto' => $producto]);
         else
             return view('producto.mensaje');
             
     } 
}
