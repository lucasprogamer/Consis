@extends('layouts.adminex')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New post</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Novo
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
        
                <div class="panel-body">

                    {!! Form::open(['route' => 'posts.store']) !!}

                        @include('posts.fields')

                    {!! Form::close() !!}
              
                </div>
            </section>
        </div>
    </div>
@endsection