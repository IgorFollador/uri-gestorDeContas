@extends('layouts.default')

@section('content')
    <h1>Renegociacoes</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
        </thead>

        <tbody>
            @foreach($renegociacoes as $renegociacao)
                <tr>
                    <td>{{ $renegociacao->descricao }}</td>
                    <td>
                        <a href="{{ route('renegociacao.edit', ['id'=>$renegociacao->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$renegociacao->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $renegociacoes->links("pagination::bootstrap-4") }}

    <a href="{{ route('renegociacao.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"renegociacao"
@endsection
