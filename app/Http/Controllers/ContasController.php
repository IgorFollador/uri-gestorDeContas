<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Http\Requests\ContaRequest;

class ContasController extends Controller
{
    public function index() {
        $contas = Conta::orderBy('descricao')->paginate(10);
        return view ('contas.index', ['contas'=>$contas]);
    }

    public function create() {
        return view('contas.create');
    }

    public function store(ContaRequest $request) {
        $conta = Conta::create([
            'descricao' => $request->get('descricao'),
            'valor' => $request->get('valor'),
            'forma_de_pagamento_id' => $request->get('forma_de_pagamento_id'),
            'categoriaContas_id' => $request->get('categoriaContas_id'),
            'moedas_id' => $request->get('categoriaContas_id'),
            'juros_id' => $request->get('juros_id'),
        ]);
        foreach($parcelas as $p => $value) {
            ContaParcela::create([
                'conta_id' => $conta->id,
                'parcela_id' => $parcelas[$p]
            ]);
        } 
        return redirect()->route('contas');
    }

    public function destroy($id) {
        try {
		    Conta::find($id)->delete();
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
        $conta = Conta::find($id);
        return view('contas.edit', compact('conta'));
    }

    public function update(ContaRequest $request, $id) {
        Conta::find($id)->update($request->all());
        return redirect()->route('contas');
    } 
}
