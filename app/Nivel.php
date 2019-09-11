<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Nivel extends Model
{
    use Notifiable;

    protected $fillable = [
        'descripcion', 'precio','curso_id', 'estado', 'IdUsuarioModificacion'];

}
