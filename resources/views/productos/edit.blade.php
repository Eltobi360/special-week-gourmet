<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white">
            Editar Producto
        </h2>
    </x-slot>

    <!-- Contenedor principal con efecto de vidrio -->
    <div class="bg-white/20 backdrop-blur-xl border border-white/30 rounded-3xl p-8 mt-6 max-w-4xl mx-auto shadow-2xl">
        <form method="POST" action="{{ route('productos.update', $producto) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Campos del formulario -->
            <div>
                <label for="nombre" class="block font-semibold text-white mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}"
                       class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all"
                       required>
            </div>

            <div>
                <label for="codigo_sku" class="block font-semibold text-white mb-1">Código SKU</label>
                <input type="text" name="codigo_sku" id="codigo_sku" value="{{ $producto->codigo_sku }}"
                       class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all">
            </div>

            <div>
                <label for="descripcion" class="block font-semibold text-white mb-1">Descripción</label>
                <textarea name="descripcion" id="descripcion"
                          class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all h-32">{{ $producto->descripcion }}</textarea>
            </div>

            <div>
                <label for="medida_id" class="block font-semibold text-white mb-1">Unidad de medida</label>
                <select name="medida_id" id="medida_id"
                        class="w-full bg-white/10 text-white border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all appearance-none"
                        required>
                    <option value="" class="bg-gray-800 text-white">-- Selecciona una medida --</option>
                    @foreach($medidas as $medida)
                        <option value="{{ $medida->id }}" class="bg-gray-800 text-white" {{ old('medida_id', $producto->medida_id) == $medida->id ? 'selected' : '' }}>
                            {{ $medida->nombre }} ({{ $medida->abreviatura }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="stock_actual" class="block font-semibold text-white mb-1">Stock actual</label>
                <input type="number" step="0.01" name="stock_actual" id="stock_actual" value="{{ $producto->stock_actual }}"
                       class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all"
                       required>
            </div>

            <div>
                <label for="stock_minimo" class="block font-semibold text-white mb-1">Stock mínimo</label>
                <input type="number" step="0.01" name="stock_minimo" id="stock_minimo" value="{{ $producto->stock_minimo }}"
                       class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all">
            </div>

            <div>
                <label for="costo_promedio" class="block font-semibold text-white mb-1">Costo promedio</label>
                <input type="number" step="0.01" name="costo_promedio" id="costo_promedio" value="{{ $producto->costo_promedio }}"
                       class="w-full bg-white/10 text-white placeholder-white/70 border-white/30 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-white transition-all">
            </div>

            <!-- Botones de acción -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <button type="submit"
                        class="flex-1 px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors shadow-lg">
                    Actualizar
                </button>
                <a href="{{ route('productos.index') }}"
                   class="flex-1 px-6 py-3 bg-white/30 text-white font-semibold rounded-full hover:bg-white/40 transition-colors shadow-lg text-center">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
