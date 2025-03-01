<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'descricao',
        'endereco',
        'link_endereco',
        'data_hora',
        'preco',
    ];
}

