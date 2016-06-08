@extends('layouts.adminex')

@section('content')
        <h1 class="pull-left">Posts</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('posts.create') !!}">Adicionar Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('posts.table')
        
@endsection