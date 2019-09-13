<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profesor extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres','apellidos','cedula','fecha_nacimiento','titulo', 'email','direccion','telf_convencional','celular', 'created_at', 'updated_at' ];
}
