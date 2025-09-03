<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nacionalidade',
        'telefone',
        'bi',
        'carta_de_conducao',
    ];

    public function carroAlugado(): HasMany
    {
        return $this->hasMany(CarroAlugado::class, 'cliente_id');
    }
}
