@extends('adminlte::page')

@section('content')
	<h3>Editando Categoria de Conta: {{ $categoria_conta->categoria }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["categoriaContas.update", 'id'=>$categoria_conta->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('categoria', 'Categoria:') !!}
			{!! Form::text('categoria', $categoria_conta->categoria, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Conta', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
