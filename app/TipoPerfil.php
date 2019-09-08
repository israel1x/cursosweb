<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPerfil extends Model
{
    //
    protected $table = 'tipoPerfil';

    protected $fillable = [
        'perfil'
    ];


    public $timestamps = false;

    public function users() {
        return $this->hasMany(User::class, 'tipoPerfil_id');
    }
}
