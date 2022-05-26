@extends('layouts.default')

@section('content')
    <h1>Forma de pagamento</h1>
    <table class = "table table-stripe table-bordered table-hover">
        <thead>
            <th>Descricao</th>
        </thead>

        <tbody>
            @foreach($forma_de_pagamentos as $forma_de_pagamento)
                <tr>
                    <td>{{ $forma_de_pagamento->descricao }}</td>
                    <td>
                        <a href="{{ route('FormaDePagamento.edit', ['id'=>$forma_de_pagamento->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$forma_de_pagamento->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $forma_de_pagamentos->links("pagination::bootstrap-4") }}

    <a href="{{ route('FormaDePagamento.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"FormaDePagamento"
@endsection