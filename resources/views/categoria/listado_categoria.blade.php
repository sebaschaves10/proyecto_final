<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <script type="text/javascript">
                    function activarCat() {
                        var respuesta = confirm("¿Desea activar la categoria?");
                        if (respuesta == true) {
                            return true;
                        } else {
                            return false;
                        }

                    }

                    function desactivarCat() {
                        var respuesta = confirm("¿Desea desactivar la categoria?");
                        if (respuesta == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                </script>
                @if(count($categorias)===0)

                <div class="container" align="center">
                    <div class="card-body">
                        <h1 class="card-title"> No hay datos registrados aun.</h1>
                    </div>
                    <div>
                        <a href="{{ url('categorias/registro') }}" class="btn btn-success"> <i class="fa fa-plus-circle"></i>Registrar</a>
                    </div></br></br>
                </div>

                @else

                <body>
                    <div class="row">
                        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-lg-12">
                            <div class="main-box clearfix">
                                <header class="main-box-header clearfix">

                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <h2 class="box-title">Añadir
                                                <a href="{{ url('/categorias/registro') }}" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                    </svg>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </header>

                                <div class="main-box-body clearfix">
                                    <div class="table-responsive">
                                        <table class="table" align="center">
                                            <thead class="black white-text">
                                                <tr>
                                                    <th>Opción</th>
                                                    <th>ID</th>
                                                    <th>Categoria</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categorias as $c)
                                                <tr>
                                                    <td>
                                                        @if($c->estado==1)
                                                        <a href="{{route('form_actualizaCategoria', $c->id)}}" class="btn btn-warning">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{route('eliminarCategoria', $c->id)}}" class="btn btn-danger" onclick="return desactivarCat()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                            </svg>
                                                        </a>
                                                        @else
                                                        <a href="{{route('activarCategoria', $c->id)}}" class="btn btn-primary" onclick="return activarCat()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                            </svg>
                                                        </a>
                                                        @endif
                                                    </td>
                                                    <td> {{ $c->id }} </td>
                                                    <td> {{ $c->nombreCategoria }} </td>
                                                    <td> {{ $c->descripcion }} </td>

                                                    <td>
                                                        @if($c->estado==1)
                                                        <span class="btn btn-info">Activado</span>
                                                        @else
                                                        <span class="btn btn-dark">Desactivado</span>
                                                        @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>