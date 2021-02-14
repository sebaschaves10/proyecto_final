<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


<!--                   -->


                <form class="text-center border border-light p-5" action ="{{url('categorias/registro')}}" method="POST">
                    @csrf
                    <p class="h4 mb-4">Registro de Categorias</p>
                    <div class="form-row mb-4">
                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                                Nombre Categoria
                                    <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" required>
                                    <label for="materialRegisterFormFirstName"> </label>
                                </div>
                            </div>

                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                               Descripción
                                <input type="text" class="form-control" placeholder="" aria-label="descripcion" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" required>
                                    <label for="materialRegisterFormFirstName"> </label>
                                </div>
                            </div>
                    </div>
                    <x-button class="btn btn-success" type="submit">{{ __('Registrar') }}</x-button>
                    <x-button class="ml-4" type="reset" >{{ __('Limpiar') }}</x-button>
                    <a  href="{{route('listadoCategorias')}}" > <x-button type="button"  class="btn btn-warning">{{ __('Cancelar') }}</x-button><br></a>

                </form>

                                       




<!--                   -->
            </div>
        </div>
    </div>
</x-app-layout>