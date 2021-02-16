<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carrito de compras') }}
        </h2>
    </x-slot>

    <div class="row" align="center">
        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">
                    <div class="form-row mb-4">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                @php
                                $suma=0;

                                @endphp
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sn-12 bg-light">
                                            @if (count(Cart::getContent()))
                                            <!-- {{Cart::getContent()}}-->

                                            <div class="main-box-body clearfix">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="black white-text" align="center">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nombre</th>
                                                                <th>Cantidad</th>
                                                                <th>Precio unidad</th>
                                                                <th>Precio total</th>
                                                                <th>Opción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach(Cart::getContent() as $p)
                                                            <tr>
                                                                <td>{{$p->id}}</td>
                                                                <td>{{$p->name}}</td>
                                                                <td>{{$p->quantity}}</td>
                                                                <td>{{$p->price}}</td>
                                                                <td>

                                                                    <?php

                                                                    $result1 = ($p->price * $p->quantity);

                                                                    echo " $result1";
                                                                    $suma += $result1;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <form action="{{route('cart.removeitem')}}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$p->id}}">
                                                                        <button type="submit" class="btn btn-link btn-sm text-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                                                            </svg>
                                                                        </button>

                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                        <thead class="black white-text">
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>Total</th>
                                                            <th><?php echo " $suma"; ?></th>
                                                            <th></th>
                                                        </thead>
                                                    </table>
                                                    <a class="btn btn-success" href="{{route('listadoProductos')}}"> + productos </a>
                                                    <a class="btn btn-success" href="{{route('cart.clear')}}"> Finalizar</a>
                                                    @else
                                                    <p>Carrito vacío</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                                    </svg>
                                                    <a class="btn btn-success" href="{{route('listadoProductos')}}">Hacer Compra </a>
                                                    @endif

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</x-app-layout>