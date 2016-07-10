<table class="table table-responsive" id="eventos-table">
    <thead>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Local</th>
        <th>Dia</th>
        <th>Imagem</th>
        <th>Autor</th>
        <th colspan="3">Ações</th>
    </thead>
    <tbody>
    @foreach($eventos as $evento)
        <tr>
            <td>{!! $evento->Titulo !!}</td>
            <td>{!! $evento->Descrição !!}</td>
            <td>{!! $evento->local !!}</td>
            <td>{!! $evento->Dia !!}</td>
            <td> <img src="{{ $evento->url}}" height="100px"/></td>
            <td>{!! $evento->Autor !!}</td>
            <td>
                {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('eventos.show', [$evento->id]) !!}" class='btn btn-default'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('eventos.edit', [$evento->id]) !!}" class='btn btn-default'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Confirma aoagar evento?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
