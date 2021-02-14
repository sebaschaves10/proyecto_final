<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resultado de busqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


<!--                   -->

<div  class="container">
    <div  class="row">
        <div  class="col-md-4">
        </div>       
        <div  class="col-md-4">
            <div align="center" class="card carta borde" style=" width: 25rem;">
                <h2 align="center" class="letra ">{{$producto->nombreProducto}}</h2>

                <img src='{{url("/imagenes/productos/$producto->foto")}}' class="rounded" alt="..." height="250">
                <div >
                    <h6 class="text letra "> Identificador: {{$producto->id}} </h6>                    
                    <h6 class="text letra "> Cantidad: {{$producto->cantidad}} </h6>
                    <h6 class="text letra "> Precio: {{$producto->precio}} </h6>
                    <h6 class="text letra "> Categoria:  #{{$producto->categoria}} {{$producto->nombreCategoria}} </h6>
                </div>
                    <a href='{{url("productos/actualizar/$producto->id")}}' class="boton_2"> Editar </a>
                    <!--<a href='{{url("productos/eliminar/$producto->id")}}' class="boton_2" > Eliminar </a>-->
                    <a class="boton_2" href="#" role="button" data-toggle="modal" data-target="#Eliminar">Eliminar</a>      
                    <a href='{{url()->previous()}}'  class="boton_2" >Volver </a>
            </div>         
        </div>
        <div  class="col-md-4">
        </div>
    </div>
</div>
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
    <div class="modal-dialog modal-dialog-centered" role="document">    
        <div style="background-color: Yellow !important;" class="modal-content">      
            <div > 
                </br> 
                <h5  style="color: Blue !important" id="exampleModalLongTitle" align="center">¡Cuidado!</h5>        
                                                      
            </div>      
            <div align="center" style="color: Blue !important"> 
                </br>
                ¿Está seguro de eliminar el producto {{$producto->nombreProducto}} del catálogo?
            </div>      
            <div  > 
                </br>
                <a href='{{url("productos/eliminar/$producto->id")}}' class="boton_5" style="color: Blue !important">Si</a>
                <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                    <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                </button> 
                    </br> </br> 
            </div>    
        </div>  
    </div> 
</div>



<!--                    -->
            </div>
        </div>
    </div>
</x-app-layout>