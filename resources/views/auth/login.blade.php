@extends('layouts.login')

@section('content')


<div class="container">

    <form method="POST"  class="form-signin" action=" {{ url('/login')  }} ">
    {!! csrf_field() !!}
    
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Entrar</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>
    
    <div class="login-wrap">
    
        <input class="form-control" placeholder="email@exemplo.com" required autofocus type="email" name="email" value="{{ old('email') }}">
    
        <input type="password" class="form-control" name="password" id="password" required placeholder="******">
    
            <div class="registration">
                Ainda não se inscreveu?
                <a class="" href="{{ url('register') }}">
                    Inscreva-se
                </a>
            </div>    

            <div>
                <button class="btn btn-lg btn-login btn-block" type="submit">
                    <i class="fa fa-check"></i>
                </button>
            </div>

            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Lembrar-me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Esqueci minha senha?</a>

                </span>
            </label>
        </form>


        <!-- Modal -->
        <form>
            
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Esqueceu sua Senha?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Insira o email para recuperação de senha.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="button"><i class="fa fa-check"></i>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

        </form>
</div>
@endsection
