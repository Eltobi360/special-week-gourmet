<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = [
        'ruc',
        'nombre',
        'contacto',
        'telefono',
        'email',
        'direccion',
        'pagina_web',
        'activo',
    ];
}
