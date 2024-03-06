<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'foto',
        'sexo',
        'cpf',
        'rg',
        'naturalidade',
        'uf_naturalidade',
        'data_nasci',
        'estado_civil',
        'telefone',
    ];

    protected $hidden = [
        'senha'
    ];

    public function departamentos (){
        return $this->belongsToMany(Departamento::class);
    }

    public function escolaridade (){
        return $this->belongsTo(Escolaridade::class);
    }

    public function endereco (){
        return $this->belongsTo(Endereco::class);
    }

    public function devocao (){
        return $this->belongsTo(Devocao::class);
    }

    public function post (){
        return $this->belongsTo(Post::class);
    }
}
