<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuroEMulta extends Model
{
    use HasFactory;
    protected $table = "jurosEMultas";
    protected $fillable = ['descricao'];
}
