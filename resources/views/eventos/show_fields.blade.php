<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $evento->id !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('Titulo', 'Titulo:') !!}
    <p>{!! $evento->Titulo !!}</p>
</div>

<!-- Descrição Field -->
<div class="form-group">
    {!! Form::label('Descrição', 'Descrição:') !!}
    <p>{!! $evento->Descrição !!}</p>
</div>

<!-- Local Field -->
<div class="form-group">
    {!! Form::label('local', 'Local:') !!}
    <p>{!! $evento->local !!}</p>
</div>

<!-- Dia Field -->
<div class="form-group">
    {!! Form::label('Dia', 'Dia:') !!}
    <p>{!! $evento->Dia !!}</p>
</div>

<!-- Imagem Field -->
<div class="form-group">
    {!! Form::label('Imagem', 'Imagem:') !!}
    <p>{!! $evento->Imagem !!}</p>
</div>

<!-- Autor Field -->
<div class="form-group">
    {!! Form::label('Autor', 'Autor:') !!}
    <p>{!! $evento->Autor !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $evento->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $evento->updated_at !!}</p>
</div>

