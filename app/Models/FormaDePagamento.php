<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaDePagamento extends Model
{
    use HasFactory;
    protected $table = "forma_de_pagamento";
    protected $fillable = ['descricao'];

    public function contas() {
        return $this->hasMany("App\Models\Conta");
    }

}
