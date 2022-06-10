<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\JuroEMulta;
use App\Http\Requests\JuroEMultaRequest; 

class JurosEMultasController extends Controller
{
    public function index () {
        $jurosEMultas = JuroEMulta::orderBy('descricao')->paginate(5);
        return view('jurosEMultas.index', ['jurosEMultas'=>$jurosEMultas]);
    }

    public function create() {
        return view('jurosEMultas.create');
    }

    public function store(JuroEMultaRequest $request){
        $novo_juroEMulta = $request->all();
        JuroEMulta::create($novo_juroEMulta);

        return redirect()->route('jurosEMultas');
    }

    public function destroy($id) {
		try {
		    JuroEMulta::find($id)->delete();
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
        $juroEMulta = JuroEMulta::find($id);
        return view('jurosEMultas.edit', compact('juroEMulta'));
    }

    public function update(JuroEMultaRequest $request, $id) {
        JuroEMulta::find($id)->update($request->all());
        return redirect()->route('jurosEMultas');;
    }
}
