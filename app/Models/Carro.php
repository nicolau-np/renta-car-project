<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'matricula',
        'lugares',
        'caixa_automovel',
        'kilometragem',
        'preco_por_dia',
        'img',
    ];

    public function carroAlugado(): HasMany
    {
        return $this->hasMany(CarroAlugado::class, 'carro_id');
    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class, 'automovel_id');
    }
}
