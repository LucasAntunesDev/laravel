<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    #Se a tabela estivesse em português
    // protected $table = 'animais';
    protected $table = 'animals';

    # Campos de dados preenchíveis
    protected $fillable = [
        'id',
        'name',
        'age',
        'image'
    ];
}
