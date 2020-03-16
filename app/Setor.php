<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    protected $table = 'setores';

    public function funcionarios()
    {
        return $this->hasMany(\App\Funcionario::class);
    }
}
