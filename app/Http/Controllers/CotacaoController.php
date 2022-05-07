<?php

namespace App\Http\Controllers;

use App\Models\TipoMoeda;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{
    public function moeda() {
        $cotacao = TipoMoeda::orderBy('descricao')->paginate(5);
        return view('cotacao.tmoeda', ['cotacao'=>$cotacao]);
    }
}
