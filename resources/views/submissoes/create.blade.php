@extends('layouts.adminex')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Criar submissoes</h1>
        </div>
    </div>
    <div class="clearfix"></div>
       <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
            <div class="col-md-12">
                <section class="panel">

                    <div class="panel-body">

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'submissoes.store']) !!}

            @include('submissoes.fields')

        {!! Form::close() !!}
    </div>
    </div>
          </section>
      </div>
  </div>
  </div>
        </section>
    </div>
</div>

@endsection
