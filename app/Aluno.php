<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // codigo realizar insert dos alunos
    protected $fillable = [
        'NOME', 
        'IDADE', 
        'nascimento', 
        'SERIE', 
        'CPF', 
        'MAE', 
        'PAI', 
        'RUA', 
        'NUMERO', 
        'BAIRRO', 
        'COMPLEMENTO', 
        'CIDADE', 
        'RELIGIAO'
    ];

    // campo de data de nascimento, usado no update
    protected $dates = ['nascimento'];

    // codigo para realizar update
    protected $guarded = [];
}
