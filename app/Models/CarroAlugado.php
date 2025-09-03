<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarroAlugado extends Model
{
    use HasFactory;

    protected $fillabel = [
        'carro_id',
        'cliente_id',
        'preco',
        'data_de_entrega_da_chave',
        'data_devolucao_da_chave',
        'local_de_circulacao',
    ];

    public function carro(): BelongsTo
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
