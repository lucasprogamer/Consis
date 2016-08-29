@extends('layouts.adminex')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit profile</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'patch']) !!}

            @include('profiles.fields')

            {!! Form::close() !!}
        </div>
@endsection
