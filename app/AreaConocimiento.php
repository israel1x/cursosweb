<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AreaConocimiento extends Model
{
    //

    use Notifiable;

    protected $table = 'area_conocimiento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion','estado', 'IdUsuarioCreacion', 'IdUsuarioModificacion'];


    public function getDescription() {
        return $this->descripcion;
    }
}
