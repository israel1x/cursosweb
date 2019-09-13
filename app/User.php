<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = [
        'name','lastname','tipoPerfil_id', 'email', 'password', 'IdUsuarioCreacion', 'IdUsuarioModificacion'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   // public $timestamps = false;

    public function isAdmin() {
        return $this->tipoPerfil_id === 1;
    }

    public function quetipoPerfil() {
        return $this->belongsTo(TipoPerfil::class, 'tipoPerfil_id');
    }
}
