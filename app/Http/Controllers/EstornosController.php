<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estorno;
use App\Http\Requests\EstornoRequest;

class EstornosController extends Controller
{
    public function index() {
        $estornos = Estorno::orderBy('descricao')->paginate(10);
        return view ('estornos.index', ['estornos'=>$estornos]);
    }

    public function create() {
        return view('estornos.create');
    }

    public function store(EstornoRequest $request) {
        $novo_estorno = $request->all();
        Estorno::create($novo_estorno);
        return redirect()->route('estornos');
    }

    public function destroy($id) {
        try {
		    Estorno::find($id)->delete();
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
        $estorno = Estorno::find($id);
        return view('estornos.edit', compact('estorno'));
    }

    public function update(EstornoRequest $request, $id) {
        Estorno::find($id)->update($request->all());
        return redirect()->route('estornos');
    }
}
