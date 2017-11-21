<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    protected $fillable = [
        'id', 'name'
    ];

    public function user()
    {
        return $this->hasMany('\App\User');
    }


    public function membros()
    {
        return $this->hasMany('\App\Membro');
    }
}
