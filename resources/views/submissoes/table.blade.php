<table class="table table-responsive" id="submissoes-table">
    <thead>
        <th>Titulo</th>
        <th>Atuaçca?o</th>
        <th>Resumo</th>
        <th>Artigo</th>
        <th>Url</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($submissoes as $submissoes)
        <tr>
            <td>{!! $submissoes->Titulo !!}</td>
            <td>{!! $submissoes->Atuaçca�o !!}</td>
            <td>{!! $submissoes->Resumo !!}</td>
            <td>{!! $submissoes->Artigo !!}</td>
            <td>{!! $submissoes->url !!}</td>
            <td>
                {!! Form::open(['route' => ['submissoes.destroy', $submissoes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('submissoes.show', [$submissoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('submissoes.edit', [$submissoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
