<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $fillable = [
        'compra_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
    ];

    // Relación con Compra
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compra_id');
    }

    // Relación con Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
