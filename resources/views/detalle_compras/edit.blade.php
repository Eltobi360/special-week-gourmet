<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Editar Detalle de Compra</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('detalle_compras.update', $detalleCompra) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label>Compra</label>
                <select name="id_compra" class="w-full border rounded p-2" required>
                    @foreach($compras as $compra)
                        <option value="{{ $compra->id_compra }}" {{ $detalleCompra->id_compra == $compra->id_compra ? 'selected' : '' }}>
                            {{ $compra->numero_factura }} - {{ $compra->fecha_compra }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Producto</label>
                <select name="id_producto" class="w-full border rounded p-2" required>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id_producto }}" {{ $detalleCompra->id_producto == $producto->id_producto ? 'selected' : '' }}>
                            {{ $producto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Cantidad</label>
                <input type="number" step="0.01" name="cantidad" value="{{ $detalleCompra->cantidad }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Precio Unitario</label>
                <input type="number" step="0.01" name="precio_unitario" value="{{ $detalleCompra->precio_unitario }}" class="w-full border rounded p-2" required>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Actualizar</button>
                <a href="{{ route('detalle_compras.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
