<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // codigo realizar insert dos alunos
    protected $fillable = [
        'nome', 
        'idade', 
        'nascimento', 
        'serie', 
        'cpf', 
        'mae', 
        'pai', 
        'rua', 
        'numero', 
        'bairro', 
        'complemento', 
        'cidade', 
        'religiao'
    ];

    // campo de data de nascimento, usado no update
    protected $dates = ['nascimento'];

    // codigo para realizar update
    protected $guarded = [];
}
