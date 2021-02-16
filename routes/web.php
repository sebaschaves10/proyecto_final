<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('descripcion', [Administracion::class, 'general'] )->middleware(['auth'])->name('somos');
Route::get('/dashboard',[Tienda::class,'index'])->middleware(['auth'])->name('dashboard');

//Clientes
Route::get('clientes',[ClientesController::class,'index'])->middleware(['auth'])->name('listadoClientes');
Route::get('clientes/registro', [ClientesController::class , 'formularioReg'])->middleware(['auth'])->name('form_registroCliente');
Route::post('clientes/registro', [ClientesController::class, 'registrar'])->middleware(['auth'])->name('registrarCliente');
Route::get('clientes/actualizar/{id}', [ClientesController::class, 'formularioAct'])->middleware(['auth'])->name('form_actualizaCliente');
Route::post('clientes/actualizar/{id}', [ClientesController::class, 'actualizar'])->middleware(['auth'])->name('actualizarCliente');
Route::get('clientes/eliminar/{id}', [ClientesController::class, 'eliminar'])->middleware(['auth'])->name('eliminarCliente');
Route::get('clientes/activar/{id}', [ClientesController::class, 'activar'])->middleware(['auth'])->name('activarCliente');
Route::get('clientes/consulta', [ClientesController::class, 'form_consulta'])->middleware(['auth'])->name('form_consultaProducto');
Route::post('clientes/consulta', [ClientesController::class, 'consultar'])->middleware(['auth'])->name('consulta_cliente');

// Categorias 
Route::get('categorias', [CategoriasController::class, 'index'])->middleware(['auth'])->name('listadoCategorias');
Route::get('categorias/registro', [CategoriasController::class , 'formularioReg'])->middleware(['auth'])->name('form_registroCategoria');
Route::post('categorias/registro', [CategoriasController::class, 'registrar'])->middleware(['auth'])->name('registrarCategoria');
Route::get('categorias/actualizar/{id}', [CategoriasController::class, 'formularioAct'])->middleware(['auth'])->name('form_actualizaCategoria');
Route::post('categorias/actualizar/{id}', [CategoriasController::class, 'actualizar'])->middleware(['auth'])->name('actualizarCategoria');
Route::get('categorias/eliminar/{id}', [CategoriasController::class, 'eliminar'])->middleware(['auth'])->name('eliminarCategoria');
Route::get('categorias/activar/{id}', [CategoriasController::class, 'activar'])->middleware(['auth'])->name('activarCategoria');

// Productos
Route::get('productos', [ProductosController::class, 'listado'])->middleware(['auth'])->name('listadoProductos');
Route::get('productos/ordenado/producto', [ProductosController::class, 'porProducto'])->middleware(['auth'])->name('porProducto');
Route::get('productos/ordenado/categoria', [ProductosController::class, 'porCategoria'])->middleware(['auth'])->name('porCategoria');
Route::get('productos/ordenado/precio', [ProductosController::class, 'porPrecio'])->middleware(['auth'])->name('porPrecio');
Route::get('productos/detalle/{id}', [ProductosController::class, 'detalle'])->middleware(['auth']);
Route::get('productos/registro', [ProductosController::class , 'formulario_registrar'])->middleware(['auth']);
Route::post('productos/registro', [ProductosController::class , 'registrar'])->middleware(['auth']);
Route::get('productos/actualizar/{id}', [ProductosController::class, 'formulario_actualizar']);
Route::post('productos/actualizar/{id}', [ProductosController::class, 'actualizar'])->middleware(['auth']);
Route::get('productos/eliminar/{id}', [ProductosController::class, 'eliminar'])->middleware(['auth'])->name('eliminarProducto');
Route::get('Productos/activar/{id}', [ProductosController::class, 'activar'])->middleware(['auth'])->name('activarProducto');
Route::get('productos/consulta', [ProductosController::class, 'formulario_consultar'])->middleware(['auth']);
Route::post('productos/consulta', [ProductosController::class, 'consultar'])->middleware(['auth']);
Route::get('productos/{id}/{descripcion?}', [ProductosController::class, 'descripcion'])->middleware(['auth']);

//usuarios
Route::get('usuarios', [UsuariosController::class, 'index'])->name('listadoUsuarios');
Route::get('administracion', [Administracion::class, 'index'])->name('informacion');


//Carrito
Route::post('cart-add', [CartController::class , 'add'])->name('cart.add');
Route::get('cart-checkout', [CartController::class , 'cart'])->middleware(['auth'])->name('cart.checkout');
Route::get('cart-clear', [CartController::class , 'clear'])->middleware(['auth'])->name('cart.clear');
Route::post('cart-removeitem', [CartController::class , 'removeitem'])->middleware(['auth'])->name('cart.removeitem');

require __DIR__.'/auth.php';
