<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(count($productos)===0)
                <div class="container" align="center">
                    <div class="row">
                        <div class="card" style="width: 76rem;">

                            <div class="card-body">
                                <h1 class="card-title"> No hay productos registrados</h1>
                            </div>
                            <div>
                                <a href="{{ url('productos/registro') }}" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Registrar </a>
                            </div></br></br>
                        </div>
                    </div>
                </div>
            </div>

            @else

            <header class="main-box-header clearfix">
                <div class="form-row mb-4">
                    <div class="col">
                        <h2 class="box-title" style="color: black">Añadir
                            <a href="{{ url('productos/registro') }}" class="btn btn-success"> <i class="fa fa-plus-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg>
                            </a>
                        </h2>
                    </div>
                    <div class="col"> </div>
                    <div class="col">
                        <form action='{{url("productos/consulta")}}' method="POST" class="form-inline md-form mr-auto mb-4">
                            @csrf
                            <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Ingrese codigo" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                            <button class="btn btn-primary" type="submit" value="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                        <div class="letra" style="color: black">
                            <div class=" dropdown show" id="sidebar-nav">
                                <a class=" boton_2 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                                    Ordenar por
                                </a>
                                <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item descripcion_2 " href='{{ route("porProducto") }}'>Nombre</a>
                                    <a class="dropdown-item descripcion_2 " href='{{ route("porCategoria") }}'>Categoria</a>
                                    <a class="dropdown-item descripcion_2 " href='{{ route("porPrecio") }}'>Precio</a>
                                </div>
                            </div>
                        </div>
                        </br></br>
                    </div>
                </div>
            </header>

            <div class="container" align="center">
            <div class="container" align="left">
                @if(count(Cart::getContent()))
                <a href="{{route('cart.checkout')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    Ver Carrito <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                @endif
            </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        @foreach($productos as $p)
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <div class="letra" align="center">
                                    <h4> {{ $p->nombreProducto}} </h4>
                                </div>
                                <img src='{{url("/imagenes/productos/$p->foto")}}' class="card-img-top" alt="..." height="200">
                                <div class="card-body">
                                    <p class="card-text"> Código: {{$p->id}} </p>
                                    <p class="card-text"> Precio: {{$p->precio}} </p>
                                    <p class="card-text"> Categoria: {{$p->nombreCategoria}} </p>
                                </div>

                                <form action="{{route('cart.add')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$p->id}}">
                                    <input type="submit" name="btn" class="btn btn-warning" value="Agregar Carrito">

                                </form>
                                <a href='{{url("productos/detalle/$p->id" )}}' class="btn btn-primary"> Ver detalles </a>
                            </div>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!--
                
                 &nbsp;&nbsp;
                    <div class="row">
                        @foreach($productos as $p)
                        <div class="col-md-3">
                            <div class="card" style="width: 20rem;">
                           
                                <div class="letra" align="center">
                                    <h4> {{ $p->nombreProducto}} </h4>
                                </div>
                                <img src='{{url("/imagenes/productos/$p->foto")}}' class="rounded" alt="..." height="200">
                                <div align="center">
                                    <h6 class="letra"> Precio: {{$p->precio}} </h6>
                                    <h6 class="letra"> {{$p->nombreCategoria}} </h6>
                                </div>
                                <a class="btn btn-warning" href="#" role="button" data-toggle="collapse" data-target="#comprar{{$p->id}}">Comprar</a>
                                <form id="comprar{{$p->id}}" class="letra collapse" action='{{url("productos/comprar")}}' method= "POST">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="cantidad">¿Cuántos ejemplares desea adquirir?</label>
                                        <label style="background-color: light !important;">({{$p->cantidad}} unidades)</label>
                                        <input required type="number" min='1' max='{{$p->cantidad}}' id="cantidad" name="cantidad"  class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                    </div>
                                    
                                    <div align="center"><button type="submit" >Añadir al carrito</button></div>
                                </form>
                                <a href='{{url("productos/detalle/$p->id" )}}' class="btn btn-primary" > Ver detalles </a>                    
                            </div>  
                            <br>
                        </div>
                        @endforeach
                    </div>-->
            </div>
            @endif
        </div>
    </div>
    </div>
</x-app-layout>