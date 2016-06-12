@extends('layouts.adminex')

@section('content')
    @include('eventos.show_fields')

    <div class="form-group">
           <a href="{!! route('eventos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
