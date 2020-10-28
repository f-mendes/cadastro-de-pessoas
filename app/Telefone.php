<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public $timestamps = false;
    protected $fillable = ['pessoa_id','telefone'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
