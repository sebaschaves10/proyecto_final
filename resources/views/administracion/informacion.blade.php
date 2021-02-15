@extends('layout.master')
@section('content')
<div class="container" align="center">
    <h1 style="color: black"> SOMOS </h1>
    <h4 style="color: black;">Somos un Granero 100% Nariñense, comercializadores de productos de la canasta familiar. Trabajamos siempre pensando en nuestros clientes.</h4>
</div>
<div class="row" align="center">
    <div class="col-md-4">
        <!-- Card -->
        <div class="card text-dark bg-light  mb-3" style="max-width: 28rem;">
            <div class="card-header titulo">MISIÓN</div>
            <img class="rounded-circle" height="240" src="{{ url('imagenes/somos/1.jpg') }}" alt="Card image cap">
            <div class="card-body">

                Nuestra misión es convertirnos en una cadena de supermercados a nivel nacional al tiempo que ofrecemos un amplio surtido de productos de calidad a unos precios competitivos.

            </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col-md-4">
        <!-- Card -->
        <div class="card text-dark bg-light  mb-3" style="max-width: 28rem;">
            <div class="card-header titulo">VISIÓN</div>
            <img class="rounded-circle" height="240" src="{{ url('imagenes/somos/4.jpg') }}" alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                Consolidarnos como una cadena de supermercados cercana, donde el cliente siempre esté bien atendido y pueda realizar su compra de manera agradable y satisfactoria.

            </div>


        </div>
        <!-- Card -->
    </div>
    <div class="col-md-4">
        <!-- Card -->
        <div class="card text-dark bg-light  mb-3" style="max-width: 28rem;">
            <div class="card-header titulo">NUESTROS VALORES</div>
            <!-- Card image -->
            <img class="rounded-circle" height="240" src="{{ url('imagenes/somos/3.jpg') }}" alt="Card image cap">

            <!-- Card content -->

            Todos nuestros productos y servicios son siempre merecedores de una valoración excelente por parte de su destinatario. Calidad, Excelencia, Rigurosidad, Coherencia, Pertinencia, Aprendizaje, Humildad y Compromiso Social.

        </div>

    </div>
</div>
</div>


</br>

</div>
<!-- Card -->
</div>
</div>
</div>



<div align="center">
    <a href='{{url()->previous()}}' class="valores"> Regresar </a>
</div>
@stop