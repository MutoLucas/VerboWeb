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
        Schema::create('escolaridades', function (Blueprint $table) {
            $table->id();
            $table->enum('grau_instrucao', ['f_i', 'f_c', 'm_i', 'm_c', 's_i', 's_c', 'pos', 'mest', 'dout']);
            $table->string('formacao', 255);
            $table->string('proficao', 255);
            $table->foreignId('usuario_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escolaridades');
    }
};
