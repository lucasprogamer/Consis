<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $post->id !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $post->titulo !!}</p>
</div>

<!-- Post Field -->
<div class="form-group">
    {!! Form::label('post', 'Post:') !!}
    <p>{!! $post->post !!}</p>
</div>

<!-- Autor Field -->
<div class="form-group">
    {!! Form::label('autor', 'Autor:') !!}
    <p>{!! $post->autor !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $post->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $post->updated_at !!}</p>
</div>

