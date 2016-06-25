<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>I Consis</title>
     
    <!-- Bootstrap -->
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
    <!-- Gallery.scss -->
    <link rel="stylesheet" href="{{ asset('consis/scss/_gallery.scss') }}">
    <!-- style.css-->
    <link rel="stylesheet" href="{{ asset('consis/css/style.css') }}">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body> 

    
    @include('consis.header')

    
    @include('consis.summary')
    
    
    @include('consis.register')

    @include('consis.event')

    @include('consis.subscribe')
    
    
    

    @include('consis.speakers')
   {{--@include('consis.pricing')--}}

    
    


    @include('consis.comments')

    @include('consis.courses')

    
    <!-- Patrocinadores -->
    @include('consis.sponsors')
    
    @include('consis.contact')
    
    @include('consis.footer')
    
    




   
    <!-- jQuery -->
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
    
    <!-- Map JS -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('consis/vendors/map/gmaps.min.js') }}"></script>
    <script src="{{ asset('consis/vendors/map/map.js') }}"></script>
     
    <script src="{{ asset('consis/js/custome.js') }}"></script> 
</body>
</html>