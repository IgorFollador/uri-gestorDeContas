<?php

namespace App\Http\Controllers;
use App\Models\Historico;
use App\Http\Requests\HistoricoRequest; 

class HistoricosController extends Controller
{
    public function index () {
        $historicos = Historico::orderBy('descricao')->paginate(5);
        return view('historicos.index', ['historicos'=>$historicos]);
    }

    public function create() {
        return view('historicos.create');
    }

    public function store(HistoricoRequest $request){
        $novo_historico = $request->all();
        Historico::create($novo_historico);

        return redirect()->route('historicos');
    }

    public function destroy($id) {
		try {
		    Historico::find($id)->delete();
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
        $historico = Historico::find($id);
        return view('historicos.edit', compact('historico'));
    }

    public function update(HistoricoRequest $request, $id) {
        Historico::find($id)->update($request->all());
        return redirect()->route('historicos');;
    }
}
