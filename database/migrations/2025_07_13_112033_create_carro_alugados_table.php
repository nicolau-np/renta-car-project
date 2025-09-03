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
        Schema::create('carro_alugados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->unsignedBigInteger('cliente_id');
            $table->string('preco');
            $table->date('data_de_entrega_da_chave');
            $table->date('data_devolucao_da_chave');
            $table->string('local_de_circulacao');
            $table->timestamps();


            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carro_alugados');
    }
};
