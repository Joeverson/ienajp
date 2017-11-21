<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    //
    protected $fillables = [
        'name',
        'tel',
        'cidade',
        'encontro',
        'batismo',
        'ccc',
        'ctl',
        'casado',
        'dizimista',
        'tipo_id'
    ];

    public function tipo()
    {
        return $this->belongsTo('\App\models\Tipo', 'tipo_id');
    }

    public function lider()
    {
        return $this->belongsTo('\App\User');
    }


    public function supervisor()
    {
        return $this->belongsTo('\App\User');


    }

}
