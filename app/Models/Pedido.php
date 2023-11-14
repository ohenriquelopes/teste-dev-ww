<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['numero_pedido'];

    // Relacionamento com clientes
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relacionamento com tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'pedido_id');
    }
// Pedido.php
//    public function tickets()
//    {
//        return $this->hasMany(Ticket::class);
//    }

}
