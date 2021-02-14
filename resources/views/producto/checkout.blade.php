<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

@php
 $suma=0;

 @endphp
<!--                   -->

                   <div class="container">
                        <div class="row">
                            <div class="col-sn-12 bg-light">
                                @if (count(Cart::getContent()))
                               <!-- {{Cart::getContent()}}-->
                                   <table class="table" >
                                      <thead class="black white-text">
                                         <th>ID</th>
                                         <th>Nombre</th>
                                         
                                         <th>Cantidad</th>
                                         <th>Precio Unidad</th>
                                         <th>Precio total</th>
                                         <th>Opcion</th>
                                         
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

                $result1 = ($p->price*$p->quantity ); 
                
                echo" $result1"; 
                $suma += $result1; 
              ?>
                </td>
                                        <td>
                                           <form action="{{route('cart.removeitem')}}" method="POST">
                                           @csrf
                                           <input type="hidden" name="id" value="{{$p->id}}">
                                           <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                           
                                           </form>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <td>
                                        </tr>
                                        @endforeach
 
                                      </tbody>
                                      <thead class="black white-text">
                                         <th></th>
                                         <th></th>
                                         <th></th>
                                         <th>Total</th>
                                         <th><?php echo" $suma"; ?></th>
                                         <th></th>
                                         
                                      </thead>
                                   </table>
                                   <a class="btn btn-success" href="{{route('listadoProductos')}}"> + productos </a>
                   <a class="btn btn-success" href="{{route('cart.clear')}}"> Finalizar</a>
                                @else

                                <p>Carrito vacio</p>
                                <a class="btn btn-success" href="{{route('listadoProductos')}}"> nueva Compra </a>
                                @endif
                            
                            </div>
                        </div>
                   </div>



<!--                    -->
            </div>
        </div>
    </div>
</x-app-layout>