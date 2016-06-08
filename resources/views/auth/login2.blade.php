@extends('layouts.login')

@section('content')

    <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Entrar</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
            <input type="password" class="form-control" name="password" placeholder="Senha">

            <button class="btn btn-lg btn-login btn-block" type="Entrar">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Ainda não Se inscreveu?
                <a class="" href="{{ url('/register') }}">
                    Increver-se
                </a>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Lembrar de mim
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> esqueci minha senha?</a>

                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

@endsection
