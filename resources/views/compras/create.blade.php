<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Registrar Compra</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('compras.store') }}" class="space-y-4">
            @csrf

            <div>
                <label>Proveedor</label>
                <select name="proveedor_id" class="w-full border rounded p-2" required>
                    <option value="">Seleccione</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Número de Factura</label>
                <input type="text" name="numero_factura" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Fecha de Compra</label>
                <input type="date" name="fecha_compra" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Monto Total</label>
                <input type="number" step="0.01" name="monto_total" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Estado</label>
                <select name="estado" class="w-full border rounded p-2">
                    <option value="pendiente">Pendiente</option>
                    <option value="pagado">Pagado</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Guardar</button>
                <a href="{{ route('compras.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
