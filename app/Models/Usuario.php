<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', // Agrega los otros campos que deseas permitir aquí
        'apellidos',
        'genero',
        'numeroTelefono',
        'correo',
        'contrasena',
        'id_domicilio',
    ];

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class, 'id_domicilio');
    }
}
