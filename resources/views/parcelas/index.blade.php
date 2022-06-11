@extends('layouts.default')

@section('content')
    <h1>Parcelas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
        </thead>

        <tbody>
            @foreach($parcelas as $parcela)
                <tr>
                    <td>{{ $parcela->descricao }}</td>
                    <td>
                        <a href="{{ route('parcelas.edit', ['id'=>$parcela->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$parcela->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $parcelas->links("pagination::bootstrap-4") }}

    <a href="{{ route('parcelas.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"parcelas"
@endsection