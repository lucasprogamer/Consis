<table class="table table-responsive" id="authores-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($authores as $authores)
        <tr>
            <td>{!! $authores->name !!}</td>
            <td>{!! $authores->email !!}</td>
            <td>
                {!! Form::open(['route' => ['authores.destroy', $authores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('authores.show', [$authores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('authores.edit', [$authores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
