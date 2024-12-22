<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    protected $fillable = [
        'numero' => 'required | min:16',
        'cpf do usuario ' => 'required | min:11',
        'nome do titular' => 'required | min:3',
        'validade',
    ];
}
