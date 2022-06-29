@extends('layouts.default')

@section('content')
    <h1>Tesourarias</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
        </thead>

        <tbody>
            @foreach($tesourarias as $tesouraria)
                <tr>
                    <td>{{ $tesouraria->descricao }}</td>
                    <td>
                        <a href="{{ route('tesourarias.edit', ['id'=>$tesouraria->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$tesouraria->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tesourarias->links("pagination::bootstrap-4") }}

    <a href="{{ route('tesourarias.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"tesourarias"
@endsection