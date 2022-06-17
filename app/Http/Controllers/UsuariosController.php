<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\UsuarioRequest; 

class UsuariosController extends Controller
{
    public function index (Request $filto) {
        $filtragem = $filto->get('desc_filtro');
        if($filtragem == null){
            $usuarios = Usuario::orderby('nome')->paginate(10);
        } else {
            $usuarios = Usuario::where('nome', 'like', '%'.$filtragem.'%')
            ->orderby('nome')
            ->paginate(10)
            ->setpath('usuarios?desc_filtro='.$filtragem);
        }
        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }

    public function create() {
        return view('usuarios.create');
    }

    public function store(UsuarioRequest $request){
        $novo_usuario = $request->all();
        Usuario::create($novo_usuario);

        return redirect()->route('usuarios');
    }

    public function destroy($id) {
        Usuario::find($id)->delete();
        return redirect()->route('usuarios');;
    }

    public function edit($id) {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id) {
        Usuario::find($id)->update($request->all());
        return redirect()->route('usuarios');;
    }
}
