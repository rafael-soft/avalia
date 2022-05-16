<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoQuestao extends Model
{
    use HasFactory;
    protected $table = 'tipos_questoes';
    protected $fillable = ['id' , 'nome', 'descricao'];
}
