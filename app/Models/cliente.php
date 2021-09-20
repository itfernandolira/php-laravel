<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    //autorizar o método create indicando os campos que podem ser preenchidos
    protected $fillable=['nome','email','pais'];
}
