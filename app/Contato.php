<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ddd',
        'telefone',
        'funcionario_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'funcionario_id' => 'integer',
    ];


    public function funcionario()
    {
        return $this->belongsTo(\App\Funcionario::class, 'funcionario_id', 'id');
    }
}
