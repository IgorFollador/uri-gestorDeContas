@extends('adminlte::page')

@section('content')
	<h3>Editando Estorno: {{ $estorno->descricao }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["estornos.update", 'id'=>$estorno->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $estorno->descricao, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('valor', 'Valor:') !!}
			{!! Form::text('valor', $estorno->valor, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('moedas_id', 'Moeda:') !!}
			{!! Form::select('moedas_id',
				\App\Models\Moeda::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
				$estorno->moedas_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Estorno', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
