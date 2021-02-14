<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alerta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


<!--                   -->

<div class="container"align="center"> 
    <div class="row">
       
        
            <div class="card" style="width: 76rem;">
                <div class="card-body">
                    <h1 class="card-title" style="color: black"> El producto con ese número no existe </h1>
                </div>
                <div >
                    <a class="btn btn-success" href="{{route('listadoProductos')}}"> Regresar </a>
                </div></br></br>
            </div>
        
       
    </div>
</div>




<!--                    -->
            </div>
        </div>
    </div>
</x-app-layout>