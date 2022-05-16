<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroPessoa extends Model
{
    use HasFactory;
    protected $table = 'generos_pessoas';
    protected $fillable = ['id', 'genero'];
}
