<table class="table table-responsive table-hover table-striped" id="posts-table">
    <thead>
        <th>Titulo</th>
        <th>Post</th>
        <th>Autor</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{!! $post->titulo !!}</td>
            <td>{!! $post->post !!}</td>
            <td>{!! $post->autor !!}</td>
            <td>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-default btn-sm'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-default btn-sm'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Deseja Realmente excluir?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>