<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'email'];

    // Relacionamento com pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
