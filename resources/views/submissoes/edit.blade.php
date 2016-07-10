@extends('layouts.adminex')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar submissoes</h1>
            </div>
        </div>
        <!--body wrapper start-->
         <div class="wrapper">
             <div class="row">
             <div class="col-md-12">
                 <section class="panel">
                     <div class="panel-body">

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($submissoes, ['route' => ['submissoes.update', $submissoes->id], 'method' => 'patch']) !!}

            @include('submissoes.fields')

            {!! Form::close() !!}
        </div>
      </div>
            </section>
        </div>
    </div>
    </div>

@endsection
