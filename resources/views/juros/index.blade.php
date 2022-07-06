@extends('layouts.default')

@section('content')
    <h1>Juros</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Porcentagem</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($juros as $juro)
                <tr>
                    <td>{{ $juro->porcentagem }} % </td>
                    <td>
                        <a href="{{ route('juros.edit', ['id'=>$juro->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$juro->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $juros->links("pagination::bootstrap-4") }}

    <a href="{{ route('juros.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"juros"
@endsection