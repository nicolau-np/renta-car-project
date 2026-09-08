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
        'data_de_recolha',
        'data_de_devolucao',
        'local_de_recolha',
        'local_de_devolucao',
        'extras',
    ];

    protected $casts = [
        'extras' => 'array',
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
