<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Field -->
<div class="col-md-12">
<section class="panel">
    <header class="panel-heading">
          {!! Form::label('post', 'Post:') !!}
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
    </header>

    
		<div class="panel-body">
			<div class="form-group  col-sm-12 col-lg-12">
				
				{!! Form::textarea('post', null, ['class' => 'form-control ckeditor']) !!}
			
			</div>
		</div>
	</section>
</div>

<!-- Autor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autor', 'Autor:') !!}
    {!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
