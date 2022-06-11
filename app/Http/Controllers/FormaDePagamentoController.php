<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormaDePagamento;
use App\Http\Requests\FormaDePagamentoRequest;

class FormaDePagamentoController extends Controller
{
    public function index() {
        $forma_de_pagamentos = FormaDePagamento::orderBy('descricao')->paginate(5);
        return view ('FormaDePagamento.index', ['forma_de_pagamentos'=>$forma_de_pagamentos]);
    }

    public function create() {
        return view('FormaDePagamento.create');
    }

    public function store(FormaDePagamentoRequest $request) {
        $nova_forma_de_pagamento = $request->all();
        FormaDePagamento::create($nova_forma_de_pagamento);
        return redirect()->route('FormaDePagamento');
    }

    public function destroy($id) {
		try {
		    FormaDePagamento::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		} 
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
	}

    public function edit($id) {
        $forma_de_pagamento = FormaDePagamento::find($id);
        return view('FormaDePagamento.edit', compact('forma_de_pagamento'));
    }

    public function update(FormaDePagamentoRequest $request, $id) {
        FormaDePagamento::find($id)->update($request->all());
        return redirect()->route('FormaDePagamento');
    }

}
