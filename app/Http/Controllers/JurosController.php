<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juro;
use App\Http\Requests\JuroRequest;

class JurosController extends Controller
{
    public function index() {
        $juros = Juro::orderBy('porcentagem')->paginate(10);
        return view ('juros.index', ['juros'=>$juros]);
    }

    public function create() {
        return view('juros.create');
    }

    public function store(JuroRequest $request){
        $novo_juro = $request->all();
        Juro::create($novo_juro);

        return redirect()->route('juros');
    }

    public function destroy($id) {
		try {
		    Juro::find($id)->delete();
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
        $juro = Juro::find($id);
        return view('juros.edit', compact('juro'));
    }

    public function update(JuroRequest $request, $id) {
        Juro::find($id)->update($request->all());
        return redirect()->route('juros');;
    }
}
