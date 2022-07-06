@extends('adminlte::page')

@section('content')
	<h3>Editando Conta: {{ $conta->descricao }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["contas.update", 'id'=>$conta->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $conta->descricao, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('valor', 'Valor:') !!}
			{!! Form::text('valor', $conta->valor, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('categoriaContas_id', 'Categoria:') !!}
			{!! Form::select('categoriaContas_id',
				\App\Models\CategoriaConta::orderBy('categoria')->pluck('categoria', 'id')->toArray(),
				$conta->categoriaContas_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('forma_de_pagamento_id', 'Forma de Pagamento:') !!}
			{!! Form::select('forma_de_pagamento_id',
				\App\Models\FormaDePagamento::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
				$conta->forma_de_pagamento_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('moedas_id', 'Moeda:') !!}
			{!! Form::select('moedas_id',
				\App\Models\Moeda::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
				$conta->moedas_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('juros_id', 'Juro:') !!}
			{!! Form::select('juros_id',
				\App\Models\Juro::orderBy('porcentagem')->pluck('porcentagem', 'id')->toArray(),
				$conta->juros_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Conta', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
