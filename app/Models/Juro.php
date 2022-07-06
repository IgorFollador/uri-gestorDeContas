<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juro extends Model
{
    use HasFactory;
    protected $table = "juros";
    protected $fillable = ['porcentagem'];

    public function contas() {
        return $this->hasMany("App\Models\Conta");
    }
}
