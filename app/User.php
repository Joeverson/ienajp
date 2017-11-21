<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipo()
    {
        return $this->belongsTo('\App\models\Tipo', 'tipo_id');
    }

    public function liderados()
    {
        return $this->hasMany('\App\Membro', 'lider_id');
    }

    public function supervisionados()
    {
        return $this->hasMany('\App\Membro', 'supervisor_id');
    }
}
