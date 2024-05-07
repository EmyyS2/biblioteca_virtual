<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livros extends Model
{
    use HasFactory;

    protected $fillable=[
        'titulo',
        'autor',
        'data_de_lancamento',
        'editora',
        'sinopse',
        'genero',
        'avaliacao'
    ];
}
