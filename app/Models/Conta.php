<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $table = "contas";
    protected $fillable = ['descricao', 'valor', 'forma_de_pagamento_id', 'moedas_id', 'categoriaContas_id', 'juros_id'];

    public function forma_de_pagamento() {
        return $this->belongsTo("App\Models\FormaDePagamento");
    }

    public function moedas() {
        return $this->belongsTo("App\Models\Moeda");
    }

    public function categoriaContas() {
        return $this->belongsTo("App\Models\CategoriaConta", "categoriaContas_id");
    }

    public function juros() {
        return $this->belongsTo("App\Models\Juro");
    }
}

