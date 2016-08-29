<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
