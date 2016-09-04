<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="Sistema de Gerenciamento de Eventos">
  <meta name="author" content="Lucas de Souza Alves">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>{{{ $name or 'Consis' }}} - @yield('title')</title>

  <link href="{{ asset('adminex/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('adminex/css/jquery.stepy.css') }}" rel="stylesheet">
  <link href="{{ asset('adminex/css/style-responsive.css') }}" rel="stylesheet">
  <!--file upload-->
  <link rel="stylesheet" type="text/css" href="{{asset('adminex/css/bootstrap-fileupload.min.css')}}" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>


<body class="login-body">

<div class="container">
    @yield('content')
</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('adminex/js/jquery-1.10.2.min.js') }}"></script>

<script src="{{ asset('adminex/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{ asset('adminex/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{ asset('adminex/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('adminex/js/jquery.stepy.js')}}"></script>
<script src="{{ asset('adminex/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminex/js/modernizr.min.js') }}"></script>
<script src="{{ asset('adminex/js/bootstrap-fileupload.min.js')}}"></script>
<script src="{{ asset('adminex/js/jquery.nicescroll.js')}}"></script>

<script>


     /*=====STEPY WIZARD WITH VALIDATION====*/
    $(function() {
        $('#stepy_form').stepy({
            backLabel: 'Back',
            nextLabel: 'Next',
            errorImage: true,
            block: true,
            description: true,
            legend: true,
            titleClick: true,
            titleTarget: '.stepy-tab',
            validate: true
        });
        $('#stepy_form').validate({
            errorPlacement: function(error, element) {
                $('#stepy_form div.stepy-error').append(error);
            },
            rules: {
                'name': 'required',
                'email': 'required'
            },
            messages: {
                'name': {
                    required: 'Name field is required!'
                },
                'email': {
                    required: 'Email field is requerid!'
                }
            }
        });
    });
</script>
</body>
</html>
