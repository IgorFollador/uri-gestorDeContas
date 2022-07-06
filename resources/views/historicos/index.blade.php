@extends('layouts.default')

@section('content')
    <h1>Historicos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
        </thead>

        <tbody>
            @foreach($historicos as $historico)
                <tr>
                    <td>{{ $historico->descricao }}</td>
                    <td>
                        <a href="{{ route('historicos.edit', ['id'=>$historico->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$historico->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $historicos->links("pagination::bootstrap-4") }}

    <a href="{{ route('historicos.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"historicos"
@endsection