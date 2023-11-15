<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Cliente;
use App\Models\Pedido;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['nome', 'email', 'titulo_ticket', 'conteudo', 'fk_pedido_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'fk_pedido_id', 'id');
    }

}
