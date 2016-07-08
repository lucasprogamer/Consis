<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Titulo', 'Titulo:') !!}
    {!! Form::text('Titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descrição Field -->
<div class="col-md-12">
<section class="panel">
    <header class="panel-heading">
    {!! Form::label('Descrição', 'Descrição:') !!}
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
    </header>


		<div class="panel-body">
			<div class="form-group  col-sm-12 col-lg-12">

    			{!! Form::textarea('Descrição', null, ['class' => 'form-control ckeditor']) !!}

			</div>
		</div>
	</section>
</div>

<!-- Local Field -->
<div class="form-group col-sm-6">
    {!! Form::label('local', 'Local:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>

<!-- Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Dia', 'Dia:') !!}
    {!! Form::select('Dia', ['Dia 1' => 'Dia 1', ' Dia 2' => ' Dia 2', ' Dia 3' => ' Dia 3', ' Dia 4' => ' Dia 4'], null, ['class' => 'form-control']) !!}
</div>


<!-- Imagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Imagem', 'Imagem:') !!}
    {!! Form::file('Imagem') !!}
</div>
<div class="clearfix"></div>



<!-- Autor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Autor', 'Autor:') !!}
    {!! Form::text('Autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
