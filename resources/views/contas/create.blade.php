@extends('adminlte::page')

@section('content')
	<h3>Nova Conta</h3>

	{!! Form::open(['route'=>'contas.store']) !!}

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('categoriaContas_id', 'Categoria:') !!}
			{!! Form::select('categoriaContas_id',
				\App\Models\CategoriaConta::orderBy('categoria')->pluck('categoria', 'id')->toArray(),
				null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('forma_de_pagamento_id', 'Forma de Pagamento:') !!}
			{!! Form::select('forma_de_pagamento_id',
				\App\Models\FormaDePagamento::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
				null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar Conta', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
