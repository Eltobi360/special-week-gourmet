<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'codigo_sku',
        'descripcion',
        'unidad_medida',
        'stock_actual',
        'stock_minimo',
        'costo_promedio',
    ];
}
