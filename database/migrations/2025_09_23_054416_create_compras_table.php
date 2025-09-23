<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id(); // id_compra en tu modelo mental, pero Laravel lo maneja como id
            $table->unsignedBigInteger('proveedor_id'); // conexión con proveedores
            $table->string('numero_factura', 100)->nullable();
            $table->date('fecha_compra');
            $table->decimal('monto_total', 10, 2)->default(0);
            $table->string('estado')->default('pendiente'); // opcional, pero útil
            $table->timestamps(); // equivale a fecha_creacion y ultima_modificacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
