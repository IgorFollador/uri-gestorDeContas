@extends('layouts.default')

@section('content')
    <h1>Moeda</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($moedas as $moeda)
                <tr>
                    <td>{{ $moeda->descricao }}</td>
                    <td>
                        <a href="{{ route('moedas.edit', ['id'=>$moeda->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$moeda->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $moedas->links("pagination::bootstrap-4") }}

    <a href="{{ route('moedas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"moedas"
@endsection