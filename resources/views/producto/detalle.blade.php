<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <script type="text/javascript">
                    function activarPro() {
                        var respuesta = confirm("¿Desea activar el producto?");
                        if (respuesta == true) {
                            return true;
                        } else {
                            return false;
                        }

                    }

                    function desactivarPro() {
                        var respuesta = confirm("¿Desea desactivar el producto?");
                        if (respuesta == true) {
                            return true;
                        } else {
                            return false;
                        }

                    }
                </script>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div align="center" class="card carta border" style=" width: 25rem;">
                                <h2 align="center" class="letra ">{{$productos->nombreProducto}}</h2>
                                <img src='{{url("/imagenes/productos/$productos->foto")}}' class="rounded" alt="..." height="250">
                                <div>
                                    <h5 class="text letra "> Identificador: {{$productos->id}} </h5>
                                    <h5 class="text letra "> Cantidad: {{$productos->cantidad}} </h5>
                                    <h5 class="text letra "> Precio: {{$productos->precio}} </h5>
                                    <h5 class="text letra "> Categoria: #{{$productos->categoria}} {{$productos->nombreCategoria}} </h5>
                                </div>
                                <div class="form-row mb-4">
                                    <tr>
                                        <a href='{{url("productos/actualizar/$productos->id")}}' class="btn btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>

                                        <a href='{{url("productos/eliminar/$productos->id")}}' class="btn btn-danger" onclick="return desactivarPro()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                            </svg>
                                        </a>

                                        <a href="{{route('activarProducto', $productos->id)}}" class="btn btn-primary" onclick="return activarPro()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                        </a>

                                        <a href="{{route('listadoProductos')}}" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                                            </svg>
                                        </a>
                                    </tr>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div style="background-color: Yellow !important;" class="modal-content">
                            <div>
                                </br>
                                <h5 style="color: Blue !important" id="exampleModalLongTitle" align="center">¡Cuidado!</h5>

                            </div>
                            <div align="center" style="color: Blue !important">
                                </br>
                                ¿Está seguro de eliminar el producto {{$productos->nombreProducto}} del catálogo?
                            </div>
                            <div>
                                </br>
                                <a href='{{url("productos/eliminar/$productos->id")}}' class="boton_5" style="color: Blue !important">Si</a>
                                <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">
                                    <span style="color: Blue !important;" aria-hidden="true">No</span>
                                </button>
                                </br> </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>