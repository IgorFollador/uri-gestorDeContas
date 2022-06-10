@extends('layouts.default')

@section('content')
    <h1>Juros e Multas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
        </thead>

        <tbody>
            @foreach($jurosEMultas as $juroEMulta)
                <tr>
                    <td>{{ $juroEMulta->descricao }}</td>
                    <td>
                        <a href="{{ route('jurosEMultas.edit', ['id'=>$juroEMulta->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$juroEMulta->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $jurosEMultas->links("pagination::bootstrap-4") }}

    <a href="{{ route('jurosEMultas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"jurosEMultas"
@endsection