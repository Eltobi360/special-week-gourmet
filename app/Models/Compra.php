<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $fillable = [
        'proveedor_id',
        'numero_factura',
        'fecha_compra',
        'monto_total',
        'estado',
    ];
     // 👇 Relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }



    // 👇 Relación futura con DetalleCompra (opcional por ahora)
    // public function detalles()
    // {
    //     return $this->hasMany(DetalleCompra::class, 'compra_id');
    // }
}
