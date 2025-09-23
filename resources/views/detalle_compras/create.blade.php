<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Nuevo Detalle de Compra</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('detalle_compras.store') }}" class="space-y-4">
            @csrf

            <div>
                <label>Compra</label>
                <select name="id_compra" class="w-full border rounded p-2" required>
                    <option value="">-- Seleccione una compra --</option>
                    @foreach($compras as $compra)
                        <option value="{{ $compra->id_compra }}">{{ $compra->numero_factura }} - {{ $compra->fecha_compra }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Producto</label>
                <select name="id_producto" class="w-full border rounded p-2" required>
                    <option value="">-- Seleccione un producto --</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id_producto }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Cantidad</label>
                <input type="number" step="0.01" name="cantidad" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Precio Unitario</label>
                <input type="number" step="0.01" name="precio_unitario" class="w-full border rounded p-2" required>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Guardar</button>
                <a href="{{ route('detalle_compras.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
