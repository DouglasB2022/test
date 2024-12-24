<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cartao extends Model
{
    protected $table = 'cartoes';
    public $timestamps = false;
    protected $fillable = [
        'numero' ,
        'saldo' ,
        'validade',
        'funcionario_id',
        'operadora_id',
    ];

    public function operadora(): BelongsTo
    {
        return $this->belongsTo(Operadora::class, 'operadora_id');
    }

    public function funcionario(): BelongsTo
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }



}
