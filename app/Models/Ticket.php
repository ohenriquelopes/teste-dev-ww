<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['nome', 'email', 'titulo_ticket', 'conteudo', 'fk_pedido_id'];


}
