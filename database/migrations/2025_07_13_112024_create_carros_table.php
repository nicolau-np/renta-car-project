<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('marca', Config::get('constants.CATEGORIAS_DE_CARROS'));
            $table->string('modelo');
            $table->string('cor');
            $table->string('matricula');
            $table->integer('lugares')->nullable();
            $table->enum('caixa_automovel', Config::get('constants.CAIXA_AUTOMOVEL'));
            $table->string('kilometragem')->nullable();
            $table->string('preco_por_dia')->nullable();
            $table->text('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
