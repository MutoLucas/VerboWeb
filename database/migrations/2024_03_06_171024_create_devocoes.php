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
        Schema::create('devocoes', function (Blueprint $table) {
            $table->id();
            $table->date('data_novo_nasci');
            $table->enum('rhema', ['sim', 'nao']);
            $table->enum('batismo_aguas', ['sim', 'nao']);
            $table->enum('tipo_batismo_aguas', ['imersao', 'aspersao']);
            $table->enum('batismo_espirito', ['sim', 'nao']);
            $table->foreignId('usuario_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devocoes');
    }
};
