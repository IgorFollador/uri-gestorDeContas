@extends('layouts.default')

@section('content')
    <h1>Usuarios</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'usuarios']) !!}
        <div class="sidebar-form">
            <div class="input-group">
                <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                </span>

    {!! Form::close() !!}
    <br>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de nascimento</th>
        </thead>

        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', ['id'=>$usuario->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$usuario->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links("pagination::bootstrap-4") }}

    <a href="{{ route('usuarios.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"usuarios"
@endsection