@extends('adminlte::page')

@section('content')
    <h3>Editando Usuario: {{ $usuario->nome }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['usuarios.update', 'id'=>$usuario->id], 'method'=>'put']) !!}
        
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $usuario->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dt_nascimento', $usuario->dt_nascimento,['class'=>'form-control','required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar Usuario', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop