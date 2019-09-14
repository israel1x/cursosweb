<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Nivel extends Model
{
    use Notifiable;

    protected $table = 'nivel';

    protected $fillable = [
        'descripcion', 'precio','curso_id', 'estado', 'IdUsuarioModificacion'];


    public function curso() { //cambio de fk
        return $this->belongsTo('App\Curso', 'curso_id');
    }

    public function capitulos() {
        return $this->hasMany('App\Capitulo');
    }



}
