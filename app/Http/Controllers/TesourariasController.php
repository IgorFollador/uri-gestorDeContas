<?php

namespace App\Http\Controllers;
use App\Models\Tesouraria;
use Illuminate\Http\Request;
use App\Http\Requests\TesourariaRequest; 


class TesourariasController extends Controller
{
    public function index () {
        $tesourarias = Tesouraria::orderBy('descricao')->paginate(5);
        return view('tesourarias.index', ['tesourarias'=>$tesourarias]);
    }

    public function create() {
        return view('tesourarias.create');
    }

    public function store(TesourariaRequest $request){
        $novo_tesouraria = $request->all();
        Tesouraria::create($novo_tesouraria);

        return redirect()->route('tesourarias');
    }

    public function destroy($id) {
		try {
		    Tesouraria::find($id)->delete();
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
        $tesouraria = Tesouraria::find($id);
        return view('tesourarias.edit', compact('tesouraria'));
    }

    public function update(TesourariaRequest $request, $id) {
        Tesouraria::find($id)->update($request->all());
        return redirect()->route('tesourarias');;
    }
}
