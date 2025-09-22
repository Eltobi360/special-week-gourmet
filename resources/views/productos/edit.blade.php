<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Editar Producto
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('productos.update', $producto) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Código SKU</label>
                <input type="text" name="codigo_sku" value="{{ $producto->codigo_sku }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Descripción</label>
                <textarea name="descripcion" class="w-full border rounded p-2">{{ $producto->descripcion }}</textarea>
            </div>

            <div>
                <label>Unidad de medida</label>
                <select name="medida_id" id="medida_id" class="border rounded p-2" required>
    <option value="">-- Selecciona una medida --</option>
    @foreach($medidas as $medida)
        <option value="{{ $medida->id }}" {{ old('medida_id') == $medida->id ? 'selected' : '' }}>
            {{ $medida->nombre }} ({{ $medida->abreviatura }})
        </option>
    @endforeach
</select>
            </div>

            <div>
                <label>Stock actual</label>
                <input type="number" step="0.01" name="stock_actual" value="{{ $producto->stock_actual }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Stock mínimo</label>
                <input type="number" step="0.01" name="stock_minimo" value="{{ $producto->stock_minimo }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Costo promedio</label>
                <input type="number" step="0.01" name="costo_promedio" value="{{ $producto->costo_promedio }}" class="w-full border rounded p-2">
            </div>

            <div class="flex gap-2">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Actualizar</button>
                <a href="{{ route('productos.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
