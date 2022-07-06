<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estorno extends Model
{
    use HasFactory;
    protected $table = "estornos";
    protected $fillable = ['descricao', 'valor', 'moedas_id'];

    public function moedas() {
        return $this->belongsTo("App\Models\Moeda");
    }
}
