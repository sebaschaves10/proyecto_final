<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <body>
                    <div class="container" align="center">
                        <div class="row">
                            <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="col-lg-12">
                                <div class="main-box clearfix">

                                    <form action="{{route('actualizarCliente', $clientes->id )}}" method="POST">
                                        @csrf

                                        <p class="h4 mb-4">Formulario de Actualizacion</p>
                                        <div class="form-group">
                                            <label for="nombrePro">Nombre </label>
                                            <input type="text" id="nombreCli" name="nombreCli" value="{{$clientes->nombreCliente}}" class="form-control" placeholder="..." required>
                                        </div>

                                        <!-- Etiquetas de tipo number -->
                                        <div class="form-group">
                                            <label for="cedulaPro">Cedula </label>
                                            <input type="text" id='cedulaCli' name='cedulaCli' value="{{$clientes->cedula}}" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="direccionPro">Direccion </label>
                                            <input type="text" id='direccionCli' name='direccionCli' value="{{$clientes->direccion}}" class="form-control" placeholder="...">
                                        </div>

                                        <div class="form-group">
                                            <label for="telefonoPro">Teléfono </label>
                                            <input type="text" id='telefonoCli' name='telefonoCli' value="{{$clientes->telefono}}" class="form-control" placeholder="...">
                                        </div>

                                        <div class="form-group">
                                            <label for="materialRegisterFormFirstName">Genero</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="generoCli" id="m" value="M" required />
                                                <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="generoCli" id="f" value="F" />
                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                            </div>
                                        </div>

                                        <x-button class="btn btn-success" type="submit">{{ __('Actualizar') }}</x-button>
                                        <x-button class="ml-4" type="reset">{{ __('Restablecer') }}</x-button>
                                        <a href="{{route('listadoCategorias')}}">
                                            <x-button type="button" class="btn btn-warning">{{ __('Cancelar') }}</x-button><br>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </div>
        </div>
    </div>
</x-app-layout>