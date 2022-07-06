@extends('layouts.default')

@section('content')
    <h1>Usuarios</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', ['id'=>$usuario->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$usuario->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links("pagination::bootstrap-4") }}

    <a href="{{ route('usuarios.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"usuarios"
@endsection