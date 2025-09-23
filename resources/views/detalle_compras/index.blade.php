<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Detalle de Compras</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('detalle_compras.create') }}" class="px-4 py-2 bg-green-600 text-white rounded">
            Nuevo Detalle
        </a>

        <table class="w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">ID</th>
                    <th class="p-2">Compra</th>
                    <th class="p-2">Producto</th>
                    <th class="p-2">Cantidad</th>
                    <th class="p-2">Precio Unitario</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                    <tr class="border-b">
                        <td class="p-2">{{ $detalle->id_detalle }}</td>
                        <td class="p-2">{{ $detalle->compra->numero_factura ?? 'N/A' }}</td>
                        <td class="p-2">{{ $detalle->producto->nombre ?? 'N/A' }}</td>
                        <td class="p-2">{{ $detalle->cantidad }}</td>
                        <td class="p-2">{{ $detalle->precio_unitario }}</td>
                        <td class="p-2 flex gap-2">
                            <a href="{{ route('compras.edit', $compra) }}" class="px-2 py-1 bg-yellow-500 text-white rounded">Editar</a>
                            <form action="{{ route('compras.destroy', $compra) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded">Eliminar</button>
</form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $detalles->links() }}
        </div>
    </div>
</x-app-layout>
