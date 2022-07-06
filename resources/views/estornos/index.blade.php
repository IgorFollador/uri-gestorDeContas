@extends('layouts.default')

@section('content')
    <h1>Estorno</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
            <th>Valor</th>
            <th>Moeda</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($estornos as $estorno)
                <tr>
                    <td>{{ $estorno->descricao }}</td>
                    <td>{{ $estorno->valor }}</td>
                    <td>{{ isset($estorno->moedas->descricao) ? $estorno->moedas->descricao :"Moeda não informada" }}</td>
                    <td>
                        <a href="{{ route('estornos.edit', ['id'=>$estorno->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$estorno->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $estornos->links("pagination::bootstrap-4") }}

    <a href="{{ route('estornos.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"estornos"
@endsection