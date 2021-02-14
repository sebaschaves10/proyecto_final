<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <body>
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-lg-12">
                            <div class="main-box clearfix">

                                <form class="text-center border border-light p-5" action="{{route('registrarCliente')}}" method="POST">
                                    @csrf
                                    <p class="h4 mb-4">Registro de Clientes</p>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- First name -->
                                            <div class="md-form">
                                            Nombre Cliente
                                                <input type="text" id="nombreCli" name="nombreCli" class="form-control" required>
                                                <label for="materialRegisterFormFirstName"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form">
                                            Cédula
                                                <input type="number" id="cedulaCli" name="cedulaCli" class="form-control" required>
                                                <label for="materialRegisterFormLastName"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- First name -->
                                            <div class="md-form">
                                            Dirección
                                                <input type="text" id="direccionCli" name="direccionCli" class="form-control" required>
                                                <label for="materialRegisterFormFirstName"></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form">
                                            Teléfono
                                                <input type="number" id="telefonoCli" name="telefonoCli" class="form-control" min='10000000' required>
                                                <label for="materialRegisterFormLastName"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- First name -->
                                            <label for="materialRegisterFormFirstName">Género</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="generoCli" id="m" value="m" required />
                                                <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="generoCli" id="f" value="f" />
                                                <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                            </div>
                                        </div>
                                    </div>

                                    <x-button class="btn btn-success" type="submit">{{ __('Registrar') }}</x-button>
                                    <x-button class="ml-4" type="reset">{{ __('Limpiar') }}</x-button>
                                    <a href="{{route('listadoClientes')}}">
                                        <x-button type="button" class="btn btn-warning">{{ __('Cancelar') }}</x-button><br>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </body>
            </div>
        </div>
    </div>
</x-app-layout>