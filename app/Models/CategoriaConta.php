<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaConta extends Model
{
    use HasFactory;
    protected $table = "categoriaContas";
    protected $fillable = ['categoria'];

    public function contas() {
        return $this->hasMany("App\Models\Conta");
    }
}
