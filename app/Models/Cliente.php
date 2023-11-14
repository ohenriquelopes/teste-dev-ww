<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pedido;
use App\Models\Ticket;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nome', 'email'];


    // Relacionamento com pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'cliente_id', 'id');
    }

}
