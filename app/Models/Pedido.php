<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ['numero_pedido'];

    // Relacionamento com tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'fk_pedido_id', 'id');
    }


}
