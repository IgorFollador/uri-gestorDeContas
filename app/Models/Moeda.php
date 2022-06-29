<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moeda extends Model
{
    use HasFactory;
    protected $table = "moedas";
    protected $fillable = ['descricao'];

    public function contas() {
        return $this->hasMany("App\Models\Conta");
    }

    public function estornos() {
        return $this->hasMany("App\Models\Estorno");
    }
}

