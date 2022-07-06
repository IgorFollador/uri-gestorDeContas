@extends('adminlte::page')

@section('content')
    <h3>Novo Juro</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'juros.store']) !!}
        
        <div class="form-group">
            {!! Form::label('porcentagem', 'Porcentagem:') !!}
            {!! Form::text('porcentagem', null, ['class'=>'form-control', 'required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Criar Juro', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop