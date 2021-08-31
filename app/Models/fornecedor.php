<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//Como o LARAVEL constroi o nome da tabela:
//Coloca o _ à esquerda de cada maiscula
//Coloca tudo a minusculas
//Acrescenta um s no final

class fornecedor extends Model
{
    use HasFactory;

    //Trait - extensão 
    use SoftDeletes;

    //Como ultrapassar a definição automática do nome da tabela
    protected $table='fornecedores';
    //autorizar o método create indicando os campos que podem ser preenchidos
    protected $fillable=['nome','site','email','pais'];
}
