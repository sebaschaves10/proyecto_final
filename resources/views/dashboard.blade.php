<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<!------------------------------------>



<div class="container" align="center">
            <h1 style="color: black" class="font-semibold text-xl text-gray-8000 leading-tight" > ¡BIENVENIDOS AL GRANERO SUPERIOR! </h1>
            <h5 style="color: black;"><br>Nuestra prioridad es llevar a nuestros clientes la mejor calidad</h5>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('imagenes/img1.png')}}" class="d-block w-100" alt="..." height="500">
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('imagenes/img2.png')}}" class="d-block w-100" alt="..." height="500">
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('imagenes/img3.png')}}" class="d-block w-100" alt="..." height="500">
                    </div>

                    <div class="carousel-item">
                        <img src="{{url('imagenes/img4.png')}}" class="d-block w-100" alt="..." height="500">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br><br>
            <img class="block h-10 w-auto fill-current text-gray-800" src="{{url('imagenes/logo.png')}}">

            <br><br>
        </div>









<!--------------------------------------->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
