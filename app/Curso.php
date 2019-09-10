<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Curso extends Model
{
    //
    use Notifiable;

    protected $table = 'cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion','descripcionlarga','prerequisito', 'objetivos', 'estado','areaconocimiento_id', 'IdUsuarioCreacion', 'IdUsuarioModificacion'];


    // Devuelve el area de conociemiento a la que pertenece
    public function queAreaConociemiento() {
       // return $this->belongsTo(TipoPerfil::class, 'tipoPerfil_id');
    }

    // Devuelve lista de niveles que tiene el curso
    public function todosLosNiveles() {
        // return $this->belongsTo(TipoPerfil::class, 'tipoPerfil_id');
    }


}
