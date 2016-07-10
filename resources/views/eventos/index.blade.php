@extends('layouts.adminex')

@section('content')
        <h1 class="pull-left">Eventos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('eventos.create') !!}">Adcionar Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')
    <div class="clearfix"></div>
       <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        eventos
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                             </span>
                    </header>
                    <div class="panel-body">

				        <div class="clearfix"></div>

					        @include('eventos.table')


					</div>
                </section>
            </div>
        </div>



@endsection
