<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_profissionals_table extends Model

{
    use HasFactory;
    protected $fillable = [
        'nome', 

        'celular', 

        'email', 

        'cpf', 

        'dataNascimento', 

        'cidade', 

        'estado', 

        'pais', 

        'rua', 

        'numero', 

        'bairro', 

        'cep', 

        'complemento', 

        'senha', 

        'salario',
    ];
}
