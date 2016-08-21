<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Consis</title>
     <!-- favicon -->
     <link rel="shortcut icon" sizes="16x16" type="image/png" href="consis/images/header/favicon.png"/>
     <meta name="description" content="I CONSIS - Congresso de Sistemas de Informação FAHESA/ITPAC de 24 à 27 de outubro - Palestras, Minicursos, Submissão de Artigos, Campeonatos.">
     <meta name="keywords" content="I Consis, Consis Congresso, Consis 2016, Consis Araguaina, Araguaina Congresso,,HTML,CSS,XML,JavaScript,Palestras,Jean carlos Suissa,normadev,minicursos,sistemas,wordpres,arduino,code dojo,league of legends, lol, cs, COUNTER STRIKE, artigos, submissão,tcc,evento">
    <!-- Bootstrap -->
    <meta name="google-site-verification" content="qym3HhFYBt4Y7Q7xcKifTswHIwYjDofyQO9CaQGeF5U" />
    <meta name="google-site-verification" content="qym3HhFYBt4Y7Q7xcKifTswHIwYjDofyQO9CaQGeF5U" />
    <link href="{{ asset('consis/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('consis/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!-- Font Awesome  -->
    <link href="{{ asset('consis/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Countdown -->
    <link href="{{ asset('consis/css/jquery.countdown.css') }}" rel="stylesheet">
    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!--    Owl Carousel css -->
    <link rel="stylesheet" href="{{ asset('consis/css/owl.carousel.css') }}" type="text/css" media="screen">

    <!-- LightBox -->
    <link rel="stylesheet" href="{{ asset('consis/vendors/Lightbox/lightbox.min.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('consis/vendors/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('consis/vendors/flexslider/preloader.css') }}">
    <!-- Gallery.scss -->
    <link rel="stylesheet" href="{{ asset('consis/scss/_gallery.scss') }}">
    <!-- style.css-->
    <link rel="stylesheet" href="{{ asset('consis/css/style.css') }}">

    <!-- Analytics  -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64656641-5', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<header class="row page_top">
    <div class="fixed">
        <div class="container">
	        <nav class="navbar navbar-default menu_part">
	        	<!-- mobile menu -->
	            <div class="navbar-header">
	               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#"><img  width="160" height="50" src="consis/images/header/LOGOCONSIS.png" alt="#"></a>
	            </div>

	            <!-- Menu -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">         
	                <ul class="nav navbar-nav navbar-right">
	                    <li><a href="/">Home</a></li>
                      <li><a href="/instrucoessubmissao">Instruções</a></li>
                      <li><a href="/datasimportantes">Datas Importantes</a></li>
	                    <li><a href="/submissao">Arquivo</a></li>
	                </ul>
	            </div>
	        </nav>
	        
    	</div>
	</div>
	<div class="page_title">
	            <h2><span>Submissões de</span> Artigos</h2>
	            <h4>Datas Importantes</h4>
    </div>
</header>
<section class="row biggest_event">
    <div class="container">
        <div class="row biggest_event_header">
            <h2>Datas Importantes</h2>
            <h6>Confira as datas importantes para submissões, notificações e inscrições dos autores</h6>
        </div>
<div class="row biggest_event_describe" style="margin-left: 40px; margin-right: 40px;">
            <div class="col-sm-12 biggest_event_left">
                <p>Prazo final de submissão de trabalhos via sistema Consis: 16/09/2016.
                </br>
                Notificação de aceite: 03/10/2016
                </br>
                Período de Inscrição de autores até: 05/10/2016.
                </br>
                <a href="/submissao" tabindex="14" style="color:red; font-size:14px">Baixe o arquivo template (.docx)</a>
                </br>
                </p>

            </div>
      </div>
</div>
</section>
@include('consis.contact')
@include('consis.footer')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('consis/vendors/flexslider/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/animatescroll/animatescroll.js') }}"></script>
    <script src="{{ asset('consis/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('consis/js/owl.carousel.min.js') }}"></script>

    <!-- LightBox -->
    <script src="{{ asset('consis/vendors/Lightbox/lightbox.min.js') }}"></script>
    <!-- Mixitup JS -->
    <script type="text/javascript" src="{{ asset('consis/vendors/mixitup/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/preloader.js') }}"></script>
    <!-- Map JS -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAL3KSOmk3G8GaJvPDULfDCLoY73UFIAaU"></script>
    <script type="text/javascript" src="{{ asset('consis/vendors/map/gmaps.min.js') }}"></script>
    <script src="{{ asset('consis/vendors/map/map.js') }}"></script>

    <script src="{{ asset('consis/js/custome.js') }}"></script>
</body>
</html>
