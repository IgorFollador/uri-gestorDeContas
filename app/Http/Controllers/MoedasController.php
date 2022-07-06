<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moeda;
use App\Http\Requests\MoedaRequest;


class MoedasController extends Controller
{
    public function index() {
        $moedas = Moeda::orderBy('descricao')->paginate(10);
        return view ('moedas.index', ['moedas'=>$moedas]);
    }

    public function create() {
        return view('moedas.create');
    }

    public function store(MoedaRequest $request) {
        $nova_moeda = $request->all();
        Moeda::create($nova_moeda);
        return redirect()->route('moedas');
    }

    public function destroy($id) {
        try {
		    Moeda::find($id)->delete();
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
        $moeda = Moeda::find($id);
        return view('moedas.edit', compact('moeda'));
    }

    public function update(MoedaRequest $request, $id) {
        Moeda::find($id)->update($request->all());
        return redirect()->route('moedas');
    } 
}
