<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->integer('numero_pedido');
            $table->unsignedBigInteger('fk_pedido_id');
            $table->string('titulo_ticket');
            $table->text('conteudo');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_pedido_id')->references('id')->on('pedidos');

//            $table->foreign('id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
