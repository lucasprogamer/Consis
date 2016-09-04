@extends('layouts.adminex')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit authores</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($authores, ['route' => ['authores.update', $authores->id], 'method' => 'patch']) !!}

            @include('authores.fields')

            {!! Form::close() !!}
        </div>
@endsection
