<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'address',
        'address2',
        'city',
        'state',
        'postal',
        'selecione1',
        'email',
        'areacode',
        'phone',
        'selecione2',
        'number1',
        'number2',
        'data',
        'arquivo',
    ];
}
