<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Titulo', 'Titulo:') !!}
    {!! Form::text('Titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- AtuaÃ§ca?o Field -->
<div class="form-group col-sm-6">
    <label>Atuação:</label>
    {!! Form::text('atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Resumo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Resumo', 'Resumo:') !!}
    {!! Form::textarea('Resumo', null, ['class' => 'form-control']) !!}
</div>

<!-- Artigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Artigo', 'Artigo:') !!}
    {!! Form::file('Artigo') !!}
</div>
<div class="clearfix"></div>

{{-- <!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('submissoes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
