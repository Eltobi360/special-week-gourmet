<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medida extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'abreviatura',
    ]; 

    // Relación inversa: una medida puede estar en muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'medida_id');
    }
}
