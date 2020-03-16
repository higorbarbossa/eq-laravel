<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'cpf',
        'ctps',
        'setor_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'setor_id' => 'integer',
    ];


    public function setor()
    {
        return $this->belongsTo(\App\Setor::class, 'setor_id', 'id');
    }

    public function contatos()
    {
        return $this->hasMany(\App\Contato::class);
    }
}
