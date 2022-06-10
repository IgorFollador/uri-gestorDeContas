<?php

namespace App\Http\Controllers;
use App\Models\Parcela;
use Illuminate\Http\Request;
use App\Http\Requests\ParcelaRequest; 

class ParcelasController extends Controller
{
    public function index () {
        $parcelas = Parcela::orderBy('descricao')->paginate(5);
        return view('parcelas.index', ['parcelas'=>$parcelas]);
    }

    public function create() {
        return view('parcelas.create');
    }

    public function store(ParcelaRequest $request){
        $novo_parcela = $request->all();
        Parcela::create($novo_parcela);

        return redirect()->route('parcelas');
    }

    public function destroy($id) {
		try {
		    Parcela::find($id)->delete();
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
        $parcela = Parcela::find($id);
        return view('parcelas.edit', compact('parcela'));
    }

    public function update(ParcelaRequest $request, $id) {
        Parcela::find($id)->update($request->all());
        return redirect()->route('parcelas');;
    }
}
