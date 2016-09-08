@extends('layouts.adminex')

@section('title', 'Submissões')

@section('content')
        <h1 class="pull-left">Submissões</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('submissoes.create') !!}">Adcionar Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')
        <div class="clearfix"></div>
           <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                        </header>
                        <div class="panel-body">

    				        <div class="clearfix"></div>

        @include('submissoes.table')
        </div>
              </section>
          </div>
      </div>
        
@endsection
