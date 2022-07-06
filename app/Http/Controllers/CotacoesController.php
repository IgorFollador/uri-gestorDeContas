<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotacoesController extends Controller
{
    public function index () {
        return view('cotacoes.index');
    }
}