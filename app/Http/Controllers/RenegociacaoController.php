<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renegociacao;
use App\Http\Requests\RenegociacaoRequest;

class RenegociacaoController extends Controller
{
    public function index() {
        $renegociacoes = Renegociacao::orderBy('descricao')->paginate(10);
        return view ('renegociacao.index', ['renegociacoes'=>$renegociacoes]);
    }

    public function create() {
        return view('renegociacao.create');
    }

    public function store(RenegociacaoRequest $request) {
        $nova_renegociacao = $request->all();
        Renegociacao::create($nova_renegociacao);
        return redirect()->route('renegociacao');
    }

    public function destroy($id) {
        try {
		    Renegociacao::find($id)->delete();
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
        $renegociacao = Renegociacao::find($id);
        return view('renegociacao.edit', compact('renegociacao'));
    }

    public function update(RenegociacaoRequest $request, $id) {
        Renegociacao::find($id)->update($request->all());
        return redirect()->route('renegociacao');
    }
}
