@extends('layouts.default')

@section('content')
    <h1>Categoria de Contas</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($categoria_contas as $categoria_conta)
                <tr>
                    <td>{{ $categoria_conta->categoria }}</td>
                    <td>
                        <a href="{{ route('categoriaContas.edit', ['id'=>$categoria_conta->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$categoria_conta->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categoria_contas->links("pagination::bootstrap-4") }}

    <a href="{{ route('categoriaContas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"categoriaContas"
@endsection