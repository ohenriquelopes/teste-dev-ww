<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['nome', 'email', 'numero_pedido', 'titulo_ticket', 'conteudo'];

    // Relacionamento com pedidos
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
}
