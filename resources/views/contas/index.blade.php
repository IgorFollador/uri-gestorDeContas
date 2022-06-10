@extends('layouts.default')

@section('content')
    <h1>Contas</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
        </thead>

        <tbody>
            @foreach($contas as $conta)
                <tr>
                    <td>{{ $conta->descricao }}</td>
                    <td>
                        <a href="{{ route('contas.edit', ['id'=>$conta->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$conta->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contas->links("pagination::bootstrap-4") }}

    <a href="{{ route('contas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"contas"
@endsection