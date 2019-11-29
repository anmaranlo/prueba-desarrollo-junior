<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use Notifiable;

    protected $fillable = [
        'nombre', 'apellido', 'identificacion', 'email', 'telefono', 'direccion', 'ciudad', 'pais',
    ];
}
