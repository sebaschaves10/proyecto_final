<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(count($categorias)===0)

                <div class="container" align="center">
                    <div class="row">

                        <div class="card" style="width: 76rem;">
                            <div class="card-body">
                                <h1 class="card-title" style="color: black"> Primero debe registrar una categoría </h1>
                            </div>
                            <div>
                                <a class="btn btn-success" href='{{url()->previous()}}'> Regresar </a>
                            </div></br></br>
                        </div>

                    </div>
                </div>

                @else

                <form class="text-center border border-light p-5" action='{{url("productos/registro")}}' enctype="multipart/form-data" method="POST">
                    @csrf
                    <p class="h4 mb-4">Registro de producto</p>
                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="md-form">
                                Nombre
                                <input type="text" id="nombrePro" name="nombrePro" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                <label for="nombrePro"> </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                Cantidad
                                <input type="number" id='cantidadPro' name='cantidadPro' min='1' max='1000' class="form-control" placeholder="" required>
                                <label for="cantidadPro"> </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">

                        <div class="col">
                            <div class="md-form">
                                Precio
                                <input type="number" id='precioPro' name='precioPro' min='100' class="form-control" placeholder="" required>
                                <label for="precioPro"> </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                <strong>Imagen:</strong></br>
                                <input type="file" name="urlfoto" required>
                            </div>
                        </div>
                    </div>

                    <label for="productos">Seleccione tipo</label>
                    <select class="custom-select-sm" id="productos" name="categorias">
                        @foreach($categorias as $c)
                        <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
                        @endforeach
                    </select>
                    <br><br>

                    <x-button class="btn btn-success" type="submit">{{ __('Registrar') }}</x-button>
                    <x-button class="ml-4" type="reset">{{ __('Limpiar') }}</x-button>
                    <a href="{{route('listadoProductos')}}">
                        <x-button type="button" class="btn btn-warning">{{ __('Cancelar') }}</x-button><br>
                    </a>
                </form>

                @endif
            </div>
        </div>
    </div>
</x-app-layout>