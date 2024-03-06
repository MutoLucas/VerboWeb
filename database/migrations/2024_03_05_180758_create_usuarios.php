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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('senha', 255);
            $table->string('foto', 255)->nullable();
            $table->enum('sexo', ['M', 'F']);
            $table->string('cpf', 11);
            $table->string('rg', 11);
            $table->string('naturalidade', 255);
            $table->string('uf_naturalidade', 2);
            $table->date('data_nasci');
            $table->enum('estado_civil', ['solteiro', 'casado', 'viuvo', 'divorciado', 'separado', 'uniao_estavel']);
            $table->string('telefone', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
