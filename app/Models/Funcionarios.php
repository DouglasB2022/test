<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
        'nome' => 'required | min:3',
        'cpf' => 'required | min: 11',
    ];
}
