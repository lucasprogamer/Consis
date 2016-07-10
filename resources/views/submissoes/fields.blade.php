<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atuacao', 'Atuacao:') !!}
    {!! Form::text('atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Resumo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('resumo', 'Resumo:') !!}
    {!! Form::textarea('resumo', null, ['class' => 'form-control ckeditor', 'rows' => '5']) !!}
</div>


<!-- Artigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('artigo', 'Artigo:') !!}
    {!! Form::file('artigo') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('submissoes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
