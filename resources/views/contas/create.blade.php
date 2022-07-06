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
			{!! Form::label('valor', 'Valor:') !!}
			{!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}
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
			{!! Form::label('moedas_id', 'Moeda:') !!}
			{!! Form::select('moedas_id',
				\App\Models\Moeda::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
				null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('juros_id', 'Juro:') !!}
			{!! Form::select('juros_id',
				\App\Models\Juro::orderBy('porcentagem')->pluck('porcentagem', 'id')->toArray(),
				null, ['class'=>'form-control', 'required']) !!}
		</div>

		<hr>

		<h4>Parcelas</h4>
		<div class="input_fields_wrap"></div>
		<br>

		<a style="float:right" class="add_field_button btn btn-default">Adicionar Parcela</a>

		<br>
		<hr>
		
		<div class="form-group">
			{!! Form::submit('Criar Conta', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>
	{!! Form::close() !!}	
@stop

@section('js')
    <script>
        $(document).ready(function(){
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");
            var x=0;
            $(add_button).click(function(e){
                x++;
                var newField = '<div><div style="width:94%; float:left" id="parcelas">{!! Form::select("parcelas[]", \App\Models\Parcela::orderBy("descricao")->pluck("descricao","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione uma parcela"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
            });
            $(wrapper).on("click",".remove_field", function(e){
                e.preventDefault(); 
                $(this).parent('div').remove(); 
                x--;
            });
        })
    </script>
@stop