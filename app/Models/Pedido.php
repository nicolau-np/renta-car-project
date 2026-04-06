<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'tem_carta',
        'telefone',
        'numero_carta',
        'bilhete',
        'solicitar_motorista',
        'solicitar_guia',
        'automovel_id',
    ];

    protected $dates = ['deleted_at'];

    public function automovel(){
        return $this->belongsTo(Carro::class,'automovel_id');
    }
}
