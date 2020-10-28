<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome','sobrenome','email','estado','pais'];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}
