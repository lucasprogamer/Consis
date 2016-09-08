<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="Sistema de Gerenciamento de Eventos">
  <meta name="author" content="Lucas de Souza Alves">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>{{{ $name or 'Consis' }}} - @yield('title')</title>

  <link href="{{ asset('adminex/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('adminex/css/style-responsive.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="{{ url('/dashboard') }}"><img src="{{asset('consis/images/header/logoconsis.png')}}" height="60"></a>
        </div>

        <div class="logo-icon text-center">
            <a href="{{ url('/dashboard') }}"><img src="{{asset('consis/images/header/favicon.png')}}" height="45"></a>
        </div>
        <!--logo and iconic logo end-->
                    <br>


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="{{asset('adminex/images/photos/user-avatar.png')}}" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">{{ Auth::user()->name }}</a></h4>
                        <span>"{{ Auth::user()->email }}"</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Informações</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Configurações</span></a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
                </ul>
            </div>


            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href=" {{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="menu-list"><a><i class="fa fa-file-text"></i> <span>Submissões</span></a>
                    <ul class="sub-menu-list">
                        <li ><a href=" {{ route('submissoes.index') }} "> Todas as Submissões</a></li>
                        <li><a href=" {{ route('submissoes.create') }} "> Enviar Submissão</a></li>
                    </ul>
                </li>


            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="{{ url('/dashboard') }}" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Buscar..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">

                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('adminex/images/photos/user-avatar.png')}}" alt="" />
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Perfil</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Configurações</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Sair</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
            @yield('content')
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            {{ date('Y') }} &copy; Consis by
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('adminex/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('adminex/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('adminex/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('adminex/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminex/js/modernizr.min.js') }}"></script>
<script src="{{ asset('adminex/js/jquery.nicescroll.js') }}"></script>


<script type="text/javascript" src="{{ asset('adminex/js/ckeditor/ckeditor.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ asset('adminex/js/scripts.js') }}"></script>

</body>
</html>
