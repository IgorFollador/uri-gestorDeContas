<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaParcela extends Model
{
    use HasFactory;
    protected $table = "conta_parcelas";
    protected $fillable = ['conta_id', 'parcela_id'];
}
