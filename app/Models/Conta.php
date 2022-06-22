<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $table = "contas";
    protected $fillable = ['descricao', 'forma_de_pagamento_id'];

    public function forma_de_pagamento() {
        return $this->belongsTo("App\Models\FormaDePagamento");
    }

}

