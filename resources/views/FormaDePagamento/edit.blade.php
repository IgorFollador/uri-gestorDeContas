@extends('adminlte::page')

@section('content')
	<h3>Editando Forma De Pagamento: {{ $forma_de_pagamento->descricao }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["FormaDePagamento.update", 'id'=>$forma_de_pagamento->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $forma_de_pagamento->descricao, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Forma De Pagamento', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
