<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Como o LARAVEL constroi o nome da tabela:
//Coloca o _ à esquerda de cada maiscula
//Coloca tudo a minusculas
//Acrescenta um s no final

class fornecedor extends Model
{
    use HasFactory;

    //Como ultrapassar a definição automática do nome da tabela
    protected $table='fornecedores';
}
