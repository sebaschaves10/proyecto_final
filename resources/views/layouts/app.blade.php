<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>  
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <!-- footer -->
    </div></div> </div></div></div>
    <footer class="page-footer " style="background-color: #FF5733;">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">
                    </h5>
            </div>
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">
                    ¡SIEMPRE A TU SERVICIO!</h5>
                    <img src="{{url('imagenes/contacto.png')}}"  height="150" >
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5>Contactanos</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Líneas de atención al cliente</a>
                        <br><a href="#!">01 8000 183475</a>
                    </li>
                    <li>
                        <a href="#!">WhatsApp: +57 310 389 56 09</a>
                    </li>
                    <li>
                        <a >Elaborado por: </a><br>
                        <a >Emerson Alexander Chacua Pistala</a><br>
                        <a >Wilinton Andres Mejia Chamorro</a><br>
                        <a >Sebastian David Chaves Garreta</a>
                        
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2021 Copyright:
        <a href="https://mdbootstrap.com/"> Granero Superior</a>
    </div>
    <!-- Copyright -->

</footer>
</div>
<!-- Fin content wrapper-->

</div>
</div>

</html>
