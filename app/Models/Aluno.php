<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

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
