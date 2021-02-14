<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <!--                   -->


                <div class="container" align="center">
                    <p class="h4 mb-4">Formulario de Actualización</p>
                    <form action='{{url("productos/actualizar/$producto->id")}}' enctype="multipart/form-data" method="POST">
                        @csrf
                        <label for="nombrePro">Nombre </label>
                        <div class="input-group mb-3">
                            <input type="text" id="nombrePro" name="nombrePro" value="{{$producto->nombreProducto}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        </div>

                        <label for="cantidadPro">Cantidad </label>

                        <div class="input-group mb-3">
                            <input type="number" id='cantidadPro' name='cantidadPro' value="{{$producto->cantidad}}" min='1' max='1000' class="form-control" placeholder="Cantidad" required>
                        </div>

                        <label for="precioPro">Precio </label>
                        <div class="input-group mb-3">
                            <input type="number" id='precioPro' name='precioPro' value="{{$producto->precio}}" min='100' class="form-control" placeholder="Precio" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-group">
                                <strong>Imagen: {{$producto->foto}}</strong></br>
                                <input type="file" name="urlfoto">
                            </div>
                        </div>

                        <label for="productos">Tipo de Producto</label>
                        <select class="custom-select-sm" id="productos" name="categorias">
                            @foreach($category as $c)
                            @if($c->id === $producto->categoria)
                            <option value="{{$c->id}}" selected>{{$c->nombreCategoria}}</option>
                            @else
                            <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
                            @endif
                            @endforeach
                        </select>
                        </br></br< /br></br>
                    
                        <x-button class="btn btn-success" type="submit">{{ __('Actualizar') }}</x-button>
                        <x-button class="ml-4" type="reset">{{ __('Restablecer') }}</x-button>
                        <a href="{{route('listadoProductos')}}">
                            <x-button type="button" class="btn btn-warning">{{ __('Cancelar') }}</x-button><br>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>