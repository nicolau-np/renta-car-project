<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <meta name="keywords" content="renta-car">
    <meta name="author" content="Wizey" />
    <meta name="description" content="RENTA CAR">

    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="RENTA CAR" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="software" />
    <meta property="og:site_name" content="RENTA CAR" />

    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('assets-painel-admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets-painel-admin/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('assets-painel-admin/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- iCheck -->
    <link href="{{ asset('assets-painel-admin/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- Meu estilo -->
    <link rel="stylesheet" href="{{ asset('assets-painel-admin/neutro/css/style.css') }}" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- OG TAGS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('assets-painel-admin/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>

    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('assets-painel-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets-painel-admin/plugins/summernote/summernote.min.css') }}">
    <script src="{{ asset('assets-painel-admin/plugins/summernote/summernote.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets-painel-admin/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>


    {{--@livewireStyles
    @livewireScripts--}}
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body
    class="@if ($type == 'auth') login-page @elseif($type == 'register') register-page @else skin-blue layout-top-nav @endif">
    @if ($type == 'auth' || $type == 'register')
        @yield('content')
    @else
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <x-nav-bar menu="{{$menu}}" type="{{$type}}" :itemsMenu="$items_do_menu" />
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Content Header (Page header) -->
                    <x-bread-crumb :menu="$menu" :submenu="$submenu" />

                    <!-- Main content -->
                    <section class="content">
                        @yield('content')
                    </section><!-- /.content -->
                </div><!-- /.container -->
            </div><!-- /.content-wrapper -->
            <x-footer />
        </div><!-- ./wrapper -->
    @endif

    <!-- SlimScroll -->
    <script src="{{ asset('assets-painel-admin/plugins/slimScroll/jquery.slimScroll.min.js') }}" type="text/javascript">
    </script>
    <!-- FastClick -->
    <script src="{{ asset('assets-painel-admin/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets-painel-admin/dist/js/app.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets-painel-admin/dist/js/demo.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets-painel-admin/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets-painel-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"
        type="text/javascript"></script>


    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>
