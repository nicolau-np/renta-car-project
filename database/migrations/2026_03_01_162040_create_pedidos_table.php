
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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tem_carta');
            $table->string('telefone');
            $table->string('numero_carta')->nullable();
            $table->text('bilhete')->nullable();
            $table->string('solicitar_motorista');
            $table->string('solicitar_guia');
            $table->unsignedBigInteger('automovel_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('automovel_id')->references('id')->on('carros')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
