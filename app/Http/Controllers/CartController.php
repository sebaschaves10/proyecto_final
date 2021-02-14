<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Cart;
use App\Models\Producto;

class CartController extends Controller
{
    //
    public function add(Request $request){
        // Realizar la actualizacion en la base de datos
        $producto= Producto::findOrFail($request->producto_id);
        Cart::add(
            $producto->id,
            $producto->nombreProducto,
            $producto->precio,
            1,
            
            $producto->categoria,
            array("urlfoto"=>$producto->foto)

        );
        return back()->with('success',"$producto->nombreProducto se ha agregado con éxito al carrito!");
    }
    public function cart(){
        return view('producto.checkout');
    }

    public function removeitem(Request $request){
        Cart::remove(
            ['id' => $request->id,
            
        ]);
        return back()->with('success',"producto eliminado con exito");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"cerrado");
    }
}
