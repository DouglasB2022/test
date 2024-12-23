<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome' ,
        'cpf' ,
    ];
    public function cartoes(): HasMany
    {
        return $this->hasMany(Cartao::class);
    }
}
