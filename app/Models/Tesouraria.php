<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesouraria extends Model
{
    use HasFactory;
    protected $table = "tesourarias";
    protected $fillable = ['descricao'];
}
