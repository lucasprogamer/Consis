<table class="table table-responsive" id="submissoes-table">
    <thead>
        <th>Titulo</th>
        <th>Atuacao</th>
        <th>Resumo</th>
        <th>Artigo</th>
        <th colspan="3">Ações</th>
    </thead>
    <tbody>
    @foreach($submissoes as $submissoes)
        <tr>
            <td>{!! $submissoes->titulo !!}</td>
            <td>{!! $submissoes->atuacao !!}</td>
            <td>{!! $submissoes->resumo !!}</td>
            <td>{!! $submissoes->artigo !!}</td>
            <td>
                {!! Form::open(['route' => ['submissoes.destroy', $submissoes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('submissoes.show', [$submissoes->id]) !!}" class='btn btn-default'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('submissoes.edit', [$submissoes->id]) !!}" class='btn btn-default'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Confimar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
