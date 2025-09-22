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
        Schema::create('medidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);       // Ej: Kilogramo
            $table->string('abreviatura', 10);  // Ej: kg
            $table->timestamps();
        
        });

        Schema::table('productos', function (Blueprint $table) {
            // Eliminar columna antigua
            if (Schema::hasColumn('productos', 'unidad_medida')) {
                $table->dropColumn('unidad_medida');
            }

            // Nueva relación con medidas
            $table->foreignId('medida_id')
                  ->constrained('medidas')
                  ->onDelete('restrict');
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revertir cambios en productos
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign(['medida_id']);
            $table->dropColumn('medida_id');

            // Volver a unidad_medida (texto libre)
            $table->string('unidad_medida', 20)->after('descripcion');
        });

          // Eliminar tabla medidas
        Schema::dropIfExists('medidas');
    }
};
