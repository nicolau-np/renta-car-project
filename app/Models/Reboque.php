<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reboque extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'telefone',
        'local_da_viatura',
        'tipo_de_servico',
        'modelo_marca_da_viatura',
        'observacao',
    ];
}
