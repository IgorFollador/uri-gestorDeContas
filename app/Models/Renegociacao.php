<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renegociacao extends Model
{
    use HasFactory;
    protected $table = "renegociacoes";
    protected $fillable = ['descricao'];
}
