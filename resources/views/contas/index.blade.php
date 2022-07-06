@extends('layouts.default')

@section('content')
    <h1>Contas</h1>

    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Forma De Pagamento</th>
            <th>Moeda</th>
            <th>Juro</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($contas as $conta)
                <tr>
                    <td>{{ $conta->descricao }}</td>
                    <td>{{ $conta->valor }}</td>
                    <td>{{ isset($conta->categoriaContas->categoria) ? $conta->categoriaContas->categoria :"Categoria não informada" }}</td>
                    <td>{{ isset($conta->forma_de_pagamento->descricao) ? $conta->forma_de_pagamento->descricao :"Forma de Pagamento não informada" }}</td>
                    <td>{{ isset($conta->moedas->descricao) ? $conta->moedas->descricao :"Moeda não informada" }}</td>
                    <td>{{ $conta->juros->porcentagem }} %</td>
                    <td>
                        <a href="{{ route('contas.edit', ['id'=>$conta->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$conta->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
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