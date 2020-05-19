<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $fillable = [
        'nome', 
        'sexo', 
        'cpf', 
        'data_nascimento',
        'peso',
        'altura',
        'circ_abdomen',
        'nivel_atividade',
        'imagem',
        'id_empresa'
    ];

    protected $guarded = [
        'id'    
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

}
