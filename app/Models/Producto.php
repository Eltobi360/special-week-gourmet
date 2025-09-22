<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'codigo_sku',
        'descripcion',
        'medida_id',      // clave foránea
        'stock_actual',
        'stock_minimo',
        'costo_promedio',
    ];

    // Relación con medidas
    public function medida()
    {
        return $this->belongsTo(Medida::class, 'medida_id');
    }
}
