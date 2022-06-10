<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaConta;
use App\Http\Requests\CategoriaContaRequest;

class CategoriaContasController extends Controller
{
    public function index() {
        $categoria_contas = CategoriaConta::orderBy('categoria')->paginate(10);
        return view ('categoriaContas.index', ['categoria_contas'=>$categoria_contas]);
    }

    public function create() {
        return view('categoriaContas.create');
    }

    public function store(CategoriaContaRequest $request) {
        $nova_categoria_conta = $request->all();
        CategoriaConta::create($nova_categoria_conta);
        return redirect()->route('categoriaContas');
    }

    public function destroy($id) {
        try {
		    CategoriaConta::find($id)->delete();
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
        $categoria_conta = CategoriaConta::find($id);
        return view('categoriaContas.edit', compact('categoria_conta'));
    }

    public function update(CategoriaContaRequest $request, $id) {
        CategoriaConta::find($id)->update($request->all());
        return redirect()->route('categoriaContas');
    } 
}
