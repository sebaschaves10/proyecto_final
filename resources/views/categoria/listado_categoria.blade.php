<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


<!--                   -->


<script type="text/javascript">
function activarCat() {
    var respuesta =  confirm("Desea activar la categoria??");
    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
    
}
function desactivarCat() {
    var respuesta =  confirm("Desea desactivar la categoria??");
    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
    
}
</script>
@if(count($categorias)===0)


<div class="container" align="center"> 

                <div class="card-body">
                    <h1 class="card-title"> No hay datos registrados aun.</h1>
                </div>
                <div >
                <a href="{{ url('categorias/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i>Registrar</a> 
                </div></br></br>
            
</div>

@else


<body >

<div class="row">
<div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">

                    <div class="form-row mb-4">
                        <div class="col">
                            <h2 class="box-title">Categorias                         
                                <a href="{{ url('/categorias/registro') }}" class="btn btn-success" >➕Nuevo</a> 
                            </h2>
                        </div>
                        <div class="col"> hhah</div>
                        <div class="col"></div>
                        
                    </div>   
                       
                </header>

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead class="black white-text">
                                <tr>
                                    <th >Op</th>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorias as $c)
                                <tr>
                                
                                    <td>  
 
                                        @if($c->estado==1)

                                        <div class="form-row">
                                            <div class="col-3">
                                            <a href="{{route('form_actualizaCategoria', $c->id)}}"  > <x-button type="button"  class="btn btn-warning">{{ __('✍🏻') }}</x-button><br></a>
                                            </div>
                                            <div class="col-3"> 
                                            <a href="{{route('eliminarCategoria', $c->id)}}"   onclick="return desactivarCat()"> <x-button type="button" class="btn btn-danger">{{ __('✖') }}</x-button><br></a>
                                            </div>
                                        </div>

                                        @else
                                        <div class="form-row">
                                            <div class="col-3">
                                            <a href="{{route('activarCategoria', $c->id)}}"  onclick="return activarCat()"> <x-button type="button" class="btn btn-primary">{{ __('✔') }}</x-button><br></a>
                                            </div>
                                            <div class="col-3"> 
                                            
                                            </div>
                                        </div>
                                        @endif    
                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->nombreCategoria }} </td>
                                    <td> {{ $c->descripcion }} </td>

                                    <td> 
                                    @if($c->estado==1)
                                    <span class="label bg-primary">Activado</span>
                                    @else
                                    <span class="label bg-warning">Desactivado</span>
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

<!--                    -->


            </div>
        </div>
    </div>
</x-app-layout>