@extends('adminlte::page')

@section('content')
    <h3>Editando Juro: {{ $juro->porcentagem }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['juros.update', 'id'=>$juro->id], 'method'=>'put']) !!}
        
        <div class="form-group">
            {!! Form::label('porcentagem', 'Porcentagem:') !!}
            {!! Form::text('porcentagem', $juro->porcentagem, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Juro', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop