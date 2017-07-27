<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('imagenes/icono/icono.png') }} ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ApiRest Ejemplo</title>
    <!-- Styles Bootstrap  -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap-theme.css') }}" rel="stylesheet">

    <!-- Scripts jquery  -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <!-- Scripts bootstrap -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- vu -->
     <!-- axios -->
    <!-- local -->

</head>
<body style="padding-top: 40px">
<div id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right small">

                    <li id="nuevo"><a href="{{ route('products.create') }}">
                            <i class=" glyphicon glyphicon-new-window"></i> Nuevo Producto</a></li>



                    <li id="listado"><a href="{{ route('products.index') }}">
                            <i class=" glyphicon glyphicon-list"></i> Listado </a></li>


                </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center  i  h5"><strong>{{ $page_header or null }}</strong>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')  }}">Home</a>
                    </li>
                    <li class="active">{{$bread or null  }}</li>
                </ol>
            </div>

            <!-- Content Row -->
        </div>

        @if(session('mensaje'))
            <script type="text/javascript">
                setTimeout(function () {
                    $("#divMensaje").fadeOut();
                }, 1500);
            </script>
            <div id="divMensaje" class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{!! session('mensaje') !!}</strong>
            </div>

        @endif
        @if(session('error'))
            <script type="text/javascript">
                setTimeout(function () {
                    $("#divError").fadeOut();
                }, 2000);
            </script>
            <div id="divError" class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{!! session('error') !!}</strong>
            </div>

        @endif

        @yield('content')


        <footer>

        </footer>
    </div>




    <script type="text/javascript">
        $(document).ready(function () {
            activo('{{ $active }}');

            function activo(active) {
                var active;
                $('#' + active + '').addClass('active');
            }

            $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
        });
    </script>
</body>
</html>