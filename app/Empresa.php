<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $fillable = [
        'nome',
        'cnpj',

        'logradouro',
        'num',
        'bairro',
        'estado',
        'uf'
    ];

    protected $guarded = [
        'id'
    ];
}
