<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory, SoftDeletes;

    // Definir la tabla si el nombre no sigue las convenciones de Laravel
    protected $table = 'usuario';

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre_usuario',
        'nombres',
        'apellidos',
        'correo_electronico',
    ];

    // Si deseas que los campos de fecha se manejen automáticamente
    protected $dates = [
        'deleted_at',
    ];
}
