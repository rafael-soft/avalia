<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrasilUF extends Model
{
    use HasFactory;
    protected $table = 'brasil_ufs';
    protected $fillable = ['id', 'nome', 'sigla'];
}
