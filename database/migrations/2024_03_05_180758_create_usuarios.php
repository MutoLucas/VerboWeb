<?php

use App\Models\Usuario;
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
            $table->enum('tipo',['admin','lider','usuario']);
            $table->string('senha', 255);
            $table->string('foto', 255)->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('rg', 11)->nullable();
            $table->string('naturalidade', 255)->nullable();
            $table->string('uf_naturalidade', 2)->nullable();
            $table->date('data_nasci')->nullable();
            $table->enum('estado_civil', ['solteiro', 'casado', 'viuvo', 'divorciado', 'separado', 'uniao_estavel'])->nullable();
            $table->string('telefone', 45)->nullable();
            $table->timestamps();
        });

        Usuario::create([
            'nome' => 'Admin',
            'email' => 'admin@mail.com',
            'tipo' => 'admin',
            'senha' => bcrypt('admin'),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
