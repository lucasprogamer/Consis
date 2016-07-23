@extends('layouts.adminex')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit submissoes</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($submissoes, ['route' => ['submissoes.update', $submissoes->id], 'method' => 'patch']) !!}

            @include('submissoes.fields')

            {!! Form::close() !!}
        </div>
@endsection
