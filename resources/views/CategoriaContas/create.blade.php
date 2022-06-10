@extends('adminlte::page')

@section('content')
	<h3>Nova Categoria de Conta</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=>'categoriaContas.store']) !!}

		<div class="form-group">
			{!! Form::label('categoria', 'Categoria:') !!}
			{!! Form::text('categoria', null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar Categoria Conta', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop

