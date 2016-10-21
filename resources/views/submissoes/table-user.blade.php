<table class="table table-responsive" id="submissoes-table">
    <thead>
        <th>Titulo</th>
        <th>Atuação</th>
        <th>Resumo</th>
        <th>Autores</th>
        <th>Artigo</th>
        {{-- <th colspan="3">Action</th> --}}
    </thead>
    <tbody>
    @foreach($submissoes as $submissoes)
        <tr>
            <td>{!! $submissoes->Titulo !!}</td>
            <td>{!! $submissoes->atuacao !!}</td>
            <td>{!! $submissoes->Resumo !!}</td>
            <td>{!! $submissoes->authores  !!}</td>
            <td><a target="_blank" href="{!! $submissoes->url !!}"><i class="fa fa-cloud-download"></i></a></td>
            {{-- <td>
                {!! Form::open(['route' => ['submissoes.destroy', $submissoes->id], 'method' => 'delete']) !!}
            <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Ações
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{!! route('submissoes.edit', [$submissoes->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i>Editar</a></li>
                    <li>{!! Form::button('Apagar <i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem Certeza?')"]) !!}</li>
                  </ul>
             </div>
                {!! Form::close() !!}
            </td> --}}
        </tr>
    @endforeach
    </tbody>
</table>
